<?php

use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;

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

Route::prefix('accounts')
    ->as('accounts.')
    ->middleware(['auth'])
    ->group(function () {

        Route::view('dashboard', 'accounts.dashboard')->name('dashboard');

        Route::resource('roles', App\Http\Controllers\RoleController::class)
            ->only(['index', 'store', 'destroy']);

        Route::resource('users', App\Http\Controllers\UserController::class)
            ->only(['index', 'create', 'show', 'edit', 'update']);

        Route::resource('permissions', App\Http\Controllers\PermissionController::class)
            ->only(['index']);

        Route::resource('subscribers', App\Http\Controllers\SubscriberController::class)
            ->only(['index', 'store', 'destroy']);


        Route::prefix('settings')->as('settings.')
            ->group(function () {
                Route::view('general', 'accounts.settings.general')->name('general');
            });
    });


require __DIR__ . '/auth.php';
