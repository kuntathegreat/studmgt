<?php

use App\Models\User;
use App\Models\Abouts;
use App\Models\Units;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UnitController;
use App\Http\Controllers\Admin\AboutusController;
use App\Http\Middleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/admin', function () {
    return view('admin.dashboard');
});*/

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'admin'])->group(function(){

	Route::get('/dashboard', function(){
        $user = DB::table('users')->count();
        $aboutus = DB::table('abouts')->count();
        $unit = DB::table('units')->count();
        
        return view('admin.dashboard', compact('user', 'aboutus', 'unit'));
	});

	Route::get('/role-register', [DashboardController::class, 'registered'])->name('role-register');
	Route::get('/role-edit/{id}', [DashboardController::class, 'registeredit'])->name('role-edit');
	Route::put('/role-register-update/{id}', [DashboardController::class, 'registerupdate'])->name('role-register-update');
	Route::delete('/role-delete/{id}', [DashboardController::class, 'registerdelete'])->name('role-delete');
	Route::get('/abouts', [AboutusController::class, 'index'])->name('abouts');
	Route::post('/save-aboutus', [AboutusController::class, 'store'])->name('save-abouts');
	Route::get('/about-us/{id}', [AboutusController::class, 'edit'])->name('edit');
	Route::put('/aboutus-update/{id}', [AboutusController::class, 'update'])->name('update');

	Route::get('/units', [UnitController::class, 'unitindex'])->name('units');
	Route::post('/save-units', [UnitController::class, 'unitstore'])->name('save-units');
	Route::get('/units/{id}', [UnitController::class, 'unitedit'])->name('unit-edit');
	Route::put('/units-update/{id}', [UnitController::class, 'unitupdate'])->name('unitupdate');
});
