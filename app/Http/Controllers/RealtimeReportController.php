<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;


class RealtimeReportController extends Controller
{
    public function index(Request $request)
    {
        session([
            'campaign_ids' => $request->input('campaign_ids', []),
            'user_groups' => $request->input('user_groups', []),
        ]);

        $refreshRate = $this->getRefreshRate($request);
        $campaignIds = session('campaign_ids', []);
        $userGroups = session('user_groups', []);
        $stats = $this->getGeneralStats($campaignIds);
        $statsIcon = $this->getAgentStats($campaignIds, $userGroups);
        $tables = $this->getActiveUsers($campaignIds, $userGroups);
        $userStatus = $this->getActiveUsers($campaignIds, $userGroups);
        $allCampaigns = $this->getAllCampaigns();
        $allUserGroups = $this->getAllUserGroups();
        $allSelectInGroups = $this->getInboundGroups();
        
        return view('admin.real-time-reports', compact(
            'stats', 'tables', 'statsIcon', 'allCampaigns', 'allUserGroups', 'allSelectInGroups', 'refreshRate', 'userStatus'
        ));

    }
    
    public function refreshTable(Request $request)
    {
        $campaignIds = session('campaign_ids', []);
        $userGroups = session('user_groups', []);
        $tables = $this->getActiveUsers($campaignIds, $userGroups);
        
        return view('admin.partials.table', compact('tables' ,'campaignIds'));
    }

    public function refreshIcon(Request $request)
    {
        $campaignIds = session('campaign_ids', []);
        $userGroups = session('user_groups', []);
        $statsIcon = $this->getAgentStats($campaignIds, $userGroups);

        return view('admin.partials.icon', compact('statsIcon'));
    }
    public function refreshReports(Request $request)
    {
        $campaignIds = session('campaign_ids', []);
        $userGroups = session('user_groups', []);
        $stats = $this->getGeneralStats($campaignIds);

        return view('admin.partials.reports', compact('stats'));
    }

    public function refreshUserStatus(Request $request)
    {
        $campaignIds = session('campaign_ids', []);
        $userGroups = session('user_groups', []);
        $userStatus = $this->getActiveUsers($campaignIds, $userGroups);

        return view('admin.partials.userStatus', compact('userStatus'));
    }
   
    #Prueba de funcion de refresco, sin confirmar
    private function getRefreshRate(Request $request)
    {
        $refreshRate = session('refresh_rate', config('app.refresh_rate') * 1000);
        $newRefresh = $request->input('refreshRate');
        $availableRates = config('app.available_refresh_rates');
        if (isset($newRefresh) && in_array($newRefresh, $availableRates)) {
            session()->put('refresh_rate', $newRefresh);
            $refreshRate = $newRefresh;
        }
    
        return $refreshRate;
    }
    
    private function getGeneralStats(array $campaignIds)
    {
        $campaignCondition = $this->buildCampaignCondition($campaignIds);
        $localTrunkShortage = '(SELECT SUM(vcss.local_trunk_shortage) FROM vicidial_campaign_server_stats vcss ' . $campaignCondition . ')';
        $dialableLeads = '(SELECT SUM(vcs.dialable_leads) FROM vicidial_campaign_stats vcs ' . $campaignCondition . ')';
        $callsToday = '(SELECT SUM(vcs.calls_today) FROM vicidial_campaign_stats vcs ' . $campaignCondition . ' )';
        $avgAgents = '(SELECT AVG(agents_average_onemin) FROM vicidial_campaign_stats ' . $campaignCondition . ')';
        $dropped = '(SELECT SUM(drops_today) FROM vicidial_campaign_stats ' . $campaignCondition . ')';
        $localTime = '(SELECT local_call_time FROM vicidial_campaigns ' . $campaignCondition . ' LIMIT 1)';
        $answered = '(SELECT SUM(answers_today) FROM vicidial_campaign_stats ' . $campaignCondition . ')';
        $avgDiffOnemin = '(SELECT AVG(differential_onemin) FROM vicidial_campaign_stats ' . $campaignCondition . ')';
        $statuses = '(SELECT vc.dial_statuses FROM vicidial_campaigns vc ' . $campaignCondition . ' ORDER BY vc.dial_statuses ASC LIMIT 1)';
        $leadsInHopper = '(SELECT COUNT(*) FROM vicidial_hopper ' . $campaignCondition . ' )';
        $droppedPercent = '(SELECT CASE WHEN SUM(vcs.drops_answers_today_pct) >= AVG(vc.adaptive_dropped_percentage) THEN CONCAT(SUM(vcs.drops_answers_today_pct), " (ALERTA)") ELSE SUM(vcs.drops_answers_today_pct) END FROM vicidial_campaign_stats vcs JOIN vicidial_campaigns vc ON vcs.campaign_id = vc.campaign_id)';
        $diff = '(SELECT ROUND(AVG((vcs.differential_onemin / vcs.agents_average_onemin) * 100), 2) FROM vicidial_campaign_stats vcs ' . $campaignCondition . ')';
        $trunkFill = '(SELECT AVG(balance_trunk_fill) FROM vicidial_campaign_stats vcs ' . $campaignCondition . ')';
        $stats = DB::table('vicidial_campaigns as vc')
            ->select([
                DB::raw('AVG(vc.auto_dial_level) AS Dial_LEVEL'),
                DB::raw("$localTrunkShortage AS TRUNK_SHORT"),
                DB::raw("$trunkFill AS TRUNK_FILL"),
                DB::raw('GROUP_CONCAT(DISTINCT vc.lead_filter_id SEPARATOR ", ") AS FILTER'),
                DB::raw('AVG(vc.adaptive_maximum_level) AS MAX_LEVEL'),
                DB::raw('AVG(vc.adaptive_dropped_percentage) AS DROPPED_MAX'),
                DB::raw('AVG(vc.adaptive_dl_diff_target) AS TARGET_DIFF'),
                DB::raw('AVG(vc.adaptive_intensity) AS INTENSITY'),
                DB::raw('AVG(vc.dial_timeout)  AS DIAL_TIMEOUT'),
                DB::raw('MAX(vc.adaptive_latest_server_time) AS TAPER_TIME'),
                DB::raw("$localTime AS LOCAL_TIME"),
                DB::raw('GROUP_CONCAT(DISTINCT vc.available_only_ratio_tally SEPARATOR ", ") AS AVAIL_ONLY'),
                DB::raw("$dialableLeads AS DIALABLE_LEADS"),
                DB::raw("$callsToday AS CALLS_TODAY"),
                DB::raw("$avgAgents AS AVG_AGENTS"),
                DB::raw('GROUP_CONCAT(DISTINCT vc.dial_method SEPARATOR ", ") AS DIAL_METHOD'),
                DB::raw('SUM(vc.hopper_level) AS HOPPER'),
                DB::raw('SUM(vc.auto_hopper_level) AS AUTO_HOPPER'),
                DB::raw("$dropped AS DROPPED"),
                DB::raw("$answered AS ANSWERED"),
                DB::raw("$avgDiffOnemin AS AVG_DIFF_ONEMIN"),
                DB::raw("$statuses AS STATUSES"),
                DB::raw("$leadsInHopper AS LEADS_IN_HOPPER"),
                DB::raw("$droppedPercent AS DROPPED_PERCENT"),
                DB::raw("$diff AS DIFF"),
                DB::raw('GROUP_CONCAT(DISTINCT vc.lead_order SEPARATOR ", ") AS ORDER_O')
            ]);
        if (!empty($campaignIds)) {
            $stats->whereIn('vc.campaign_id', $campaignIds);
        }
    
        return $stats->first();
    }
    
    private function getAgentStats(array $campaignIds, $userGroups)
    {
        $statsIcon = DB::table('vicidial_live_agents')
            ->select([
                DB::raw('SUM(CASE WHEN status IN ("INCALL", "QUEUE") THEN 1 ELSE 0 END) AS agent_incall'),
                DB::raw('COUNT(DISTINCT campaign_id) AS agent_logged_in'),
                DB::raw('COUNT(DISTINCT CASE WHEN status = "READY" THEN campaign_id END) AS agents_waiting'),
                DB::raw('SUM(CASE WHEN status = "PAUSED" THEN 1 ELSE 0 END) AS agent_paused'),
                DB::raw('COUNT(DISTINCT campaign_id) AS agent_total'),
                // Subconsulta para los llamados activos
                DB::raw('(SELECT COUNT(*) 
                            FROM vicidial_auto_calls vac 
                            WHERE vac.status NOT IN ("XFER")
                            AND (
                                (vac.call_type = "IN" AND vac.campaign_id IN (
                                    SELECT closer_campaigns 
                                    FROM vicidial_campaigns
                                ))
                                OR vac.call_type = "OUT"
                            )
                        ) AS current_active_calls'),
                // Subconsulta para los llamados esperando por agentes
                DB::raw('(SELECT SUM(CASE WHEN status = "LIVE" THEN 1 ELSE 0 END) 
                            FROM vicidial_auto_calls vac 
                            WHERE vac.status NOT IN ("XFER")
                            AND (
                                (vac.call_type = "IN" AND vac.campaign_id IN (
                                    SELECT closer_campaigns 
                                    FROM vicidial_campaigns
                                ))
                                OR vac.call_type = "OUT"
                            )
                        ) AS calls_waiting_for_agents'),
                // Subconsulta para los llamados en IVR
                DB::raw('(SELECT SUM(CASE WHEN status = "IVR" THEN 1 ELSE 0 END) 
                            FROM vicidial_auto_calls vac 
                            WHERE vac.status NOT IN ("XFER")
                            AND (
                                (vac.call_type = "IN" AND vac.campaign_id IN (
                                    SELECT closer_campaigns 
                                    FROM vicidial_campaigns
                                ))
                                OR vac.call_type = "OUT"
                            )
                        ) AS calls_in_IVR'),
                // Subconsulta para los llamados que están sonando
                DB::raw('(SELECT SUM(CASE WHEN status NOT IN ("LIVE", "IVR", "CLOSER") THEN 1 ELSE 0 END) 
                            FROM vicidial_auto_calls vac 
                            WHERE vac.status NOT IN ("XFER")
                            AND (
                                (vac.call_type = "IN" AND vac.campaign_id IN (
                                    SELECT closer_campaigns 
                                    FROM vicidial_campaigns
                                ))
                                OR vac.call_type = "OUT"
                            )
                        ) AS calls_ringing')
            ]);
        if (is_array($campaignIds) && !in_array('ALL-ACTIVE', $campaignIds, true) && !empty($campaignIds)) {
            $statsIcon->whereIn('campaign_id', $campaignIds);
        }
        if (is_array($userGroups) && !in_array('ALL-GROUPS', $userGroups, true) && !empty($userGroups)) {
            $groupUser = function ($query) use ($userGroups) {
                $query->select('user')
                    ->from('vicidial_users')
                    ->whereIn('user_group', $userGroups);
            };
            // dd($groupUser);
            $statsIcon->whereIn('user', $groupUser);
        }

    
        return $statsIcon->first();
    }
    
    private function getActiveUsers(array $campaignIds, $userGroups)
    {
        $tables = DB::table('vicidial_users')
            ->join('vicidial_live_agents', 'vicidial_users.user', '=', 'vicidial_live_agents.user')
            // ->join('vicidial_user_groups', 'vicidial_users.user_group', '=', 'vicidial_user_groups.user_group')
            ->select([
                'vicidial_live_agents.extension AS ext',
                'vicidial_users.full_name AS name',
                'vicidial_users.user_group AS user_group',
                // 'vicidial_user_groups.user_group AS group_name',
                'vicidial_live_agents.conf_exten AS session_id',
                'vicidial_live_agents.status AS status',
                'vicidial_live_agents.campaign_id AS campaign_id',
                'vicidial_live_agents.calls_today AS calls_today',
                'vicidial_live_agents.last_call_finish AS last_call_finish',
            ])
            ->addSelect(DB::raw("TIMESTAMPDIFF(MINUTE, vicidial_live_agents.last_call_finish, NOW()) AS minutes_since_last_call"));
        if (is_array($campaignIds) && !in_array('ALL-ACTIVE', $campaignIds, true) && !empty($campaignIds)) {
            $tables->whereIn('vicidial_live_agents.campaign_id', $campaignIds);
        }
        
        if (is_array($userGroups) && !in_array('ALL-GROUPS', $userGroups, true) && !empty($userGroups)) {
            $tables->join('vicidial_user_groups', 'vicidial_users.user_group', '=', 'vicidial_user_groups.user_group') // Agregar el JOIN dinámicamente
            ->whereIn('vicidial_user_groups.user_group', $userGroups);
        }
        // dd($tables->toSql());
        return $tables->get();
    }
    
    private function getAllCampaigns()
    {
        return DB::table('vicidial_campaigns')
            ->select(['campaign_id', 'campaign_name'])
            ->orderBy('campaign_id')
            ->get();
    }
    
    private function getAllUserGroups()
    {
        return DB::table('vicidial_user_groups')
            ->select(['user_group', 'group_name'])
            ->orderBy('user_group')
            ->get();
    }
    
    private function getInboundGroups()
    {
        return DB::table('vicidial_inbound_groups')
            ->select(['group_id', 'group_name'])
            ->orderBy('group_id')
            ->get();
    }
    
    private function buildCampaignCondition(array $campaignIds)
    {
        if (in_array('ALL-ACTIVE', $campaignIds, true)) {
            return '';
        }
        if (empty($campaignIds)) {
            return '';
        }
        $escapedIds = array_map(function ($id) {
            return "'" . addslashes($id) . "'";
        }, $campaignIds);
    
        return 'WHERE campaign_id IN (' . implode(',', $escapedIds) . ')';
    }
   

   
}