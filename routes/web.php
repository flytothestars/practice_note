<?php

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

Route::middleware(['auth'])->group(function () {
    Route::group(['prefix' => 'notes', 'as' => 'notes.'], function () {
        Route::get('/', [App\Http\Controllers\NoteControllers::class,'index'])->name('index');
        Route::post('/store', [App\Http\Controllers\NoteControllers::class, 'store'])->name('store');
        Route::post('/update', [App\Http\Controllers\NoteControllers::class, 'update'])->name('update');
        Route::post('/delete/{id}', [App\Http\Controllers\NoteControllers::class, 'delete'])->name('delete');
    });
});
