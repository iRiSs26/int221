<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');


use App\Http\Controllers\NoteController;

// Route::get('/notes', [NoteController::class, 'index']);
// Route::post('/notes/upload', [NoteController::class, 'upload']);
// Route::get('/notes/search', [NoteController::class, 'search']);
// Route::get('/notes/{id}/download', [NoteController::class, 'download']);

Route::get('/notes', [NoteController::class, 'index'])->name('notes.index');
Route::post('/notes/upload', [NoteController::class, 'upload'])->name('notes.upload');
Route::get('/notes/search', [NoteController::class, 'search'])->name('notes.search');
Route::get('/notes/{id}/download', [NoteController::class, 'download'])->name('notes.download');

use App\Http\Controllers\GroupStudyController;
Route::resource('group_study', GroupStudyController::class);

Route::get('/group-study', [GroupStudyController::class, 'index']);
Route::post('/group-study/create', [GroupStudyController::class, 'create']);
Route::post('/group-study/add-link/{id}', [GroupStudyController::class, 'addLink']);

use App\Http\Controllers\ChatroomController;

Route::get('/assignment-chatroom', [ChatroomController::class, 'index']);
Route::post('/assignment-chatroom/create', [ChatroomController::class, 'create']);
Route::get('/assignment-chatroom/{id}', [ChatroomController::class, 'show'])->name('chatroom.show');
Route::post('/assignment-chatroom/{chatroomId}/send', [ChatroomController::class, 'sendMessage'])->name('chatroom.sendMessage');
