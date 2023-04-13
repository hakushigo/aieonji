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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home'])->name('homepage');

// a form to push a note
Route::get('/notes/form', [\App\Http\Controllers\NoteController::class, 'FormNote'])->name('write');

// push a note
Route::post('/notes/push', [\App\Http\Controllers\NoteController::class, 'PushNote'])->name('push')->middleware(\App\Http\Middleware\NotesGuard::class);

// read
Route::get('/notes/read/{id}', [\App\Http\Controllers\NoteController::class, 'ShowNote']);
Route::post('/notes/read/{id}', [\App\Http\Controllers\NoteController::class, 'PutNotePass']);
Route::post('/notes/protected/read/{id}', [\App\Http\Controllers\NoteController::class, 'ShowProtectedNote']);

Route::get('/delete', [\App\Http\Controllers\NoteController::class, 'DeleteNote'])->name('delete');
Route::post('/notes/delete', [\App\Http\Controllers\NoteController::class, 'DropNote'])->name('dropnote');
Route::get('/disable', [\App\Http\Controllers\NoteController::class, 'ShowDisablePage'])->name('disable');

Route::post('/notes/disable', [\App\Http\Controllers\NoteController::class, 'DisableNote'])->name('disablenote');

Route::get('/edit', [\App\Http\Controllers\NoteController::class, 'ShowEditPage'])->name('edit');
Route::post('/notes/update', [\App\Http\Controllers\NoteController::class, 'EditNote'])->name('editnote');
