<?php

use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\TagController;


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

Route::middleware(['auth'])
    ->prefix('admin') //definisce il prefisso "admin/" per le rotte di questo gruppo
    ->name('admin.') //definisce il pattern con cui generare i nomi delle rotte cioè "admin.qualcosa"
    ->group(function () {
        Route::get('/', function () {
            return view("admin.dashboard");
        })->name('dashboard');
        Route::resource('events', EventController::class);

        Route::resource('tags', TagController::class);
    });
require __DIR__ . '/auth.php';
