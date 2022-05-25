<?php

use Illuminate\Support\Facades\Route;

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
})->name('welcome');

// ADMIN PANEL ROUTES
Route::prefix('admin')->as('admin.')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Route::resource('roles', \App\Http\Controllers\RoleController::class);
    // Route::resource('permissions', PemissionController::class);
    // Route::resource('subscribers', SubscriberController::class);
});


require __DIR__ . '/auth.php';
