<?php

use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\ControlAdmin;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Dashboard as LivewireDashboard;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::get('agent/login', [AdminLoginController::class, 'showLoginForm'])->name('agent.login');
Route::post('admin/login', [AdminLoginController::class, 'login'])->name('admin.login.submit');
Route::get('admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

Route::middleware('auth.admin')->group(function () {
});
Route::get('/admin/dasboard/{route}', [ControlAdmin::class, 'index'])->name('Dashboard-Admin');
Route::get('/admin/config/{route}', [ControlAdmin::class, 'index'])->name('Config-Admin');
Route::get('/admin/users/{route}', [ControlAdmin::class, 'index'])->name('Users-Admin');
Route::get('/admin/campaigns/{route}', [ControlAdmin::class, 'index'])->name('Campaigns-Admin');
Route::get('/admin/user-group/{route}', [ControlAdmin::class, 'index'])->name('User-Group-Admin');
Route::get('/admin/lists/{route}', [ControlAdmin::class, 'index'])->name('List-Admin');
Route::get('/admin/filter/{route}', [ControlAdmin::class, 'index'])->name('Filter-Admin');
Route::get('/admin/remote-agents/{route}', [ControlAdmin::class, 'index'])->name('Remote-Agents-Admin');

Route::get('real/time/reports/admin', [ControlAdmin::class, 'showAggentsLogged'])->name('Real-Time-Reports-Admin');
