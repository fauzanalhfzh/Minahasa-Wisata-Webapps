<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/storage-link', function(){
    Artisan::call('storage:link');
    return "Storage linked successfully";
});

Route::get('/clear-cache', function(){
    Artisan::call('cache:clear');
    return "Cache clear";
});

Route::get('/clear-config', function(){
    Artisan::call('config:clear');
    return "Cache clear";
});

Route::get('/clear-view', function(){
    Artisan::call('view:clear');
    return "Cache clear";
});

Route::get('/', HomeController::class)->name('home');

Route::get('/blog', [PostController::class, 'index'])->name('posts.index');


Route::get('/blog/{post:slug}', [PostController::class, 'show'])->name('posts.show');

Route::get('/profil', [ProfilController::class, 'index'])->name('profil');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])
 ->group(function () {
//     Route::get('/', HomeController::class)->name('home');
 });
