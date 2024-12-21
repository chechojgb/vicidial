<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ControlAdmin extends Controller
{
    public function index($route)
    {
        return view('admin.'.$route);
    }

    public function viewsss()
    {
        $users = DB::table('vicidial_users')->get();

        return view('admin.Users-Admin', compact('users'));
    }
}
