<?php

use App\Http\Controllers\RoleController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/**
 * ------------------
 * Admin Routes
 * ------------------
 */

/**
 * Role Routes
 */

Route::middleware('auth')->group(function () {
    Route::group(['prefix' => 'role'], function () {
        Route::get('/ajax-all', [RoleController::class, 'ajaxAll'])->name('role.ajaxAll');
        Route::get('/datatable-all', [RoleController::class, 'datatableAll'])->name('role.datatableAll');
    });

    /**
     * Always put resource route at bottom of the group or it will produce the error
     */

    Route::resource('role', RoleController::class);
});
