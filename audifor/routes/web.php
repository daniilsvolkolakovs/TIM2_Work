<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::get('/home',[HomeController::class,'index'])->middleware(['auth'])->name('home');

Route::get('post_admin',[HomeController::class,'post_admin'])->middleware(['auth','admin']);

Route::post('/upload_post',[HomeController::class,'upload']);

Route::get('/view_post',[HomeController::class,'view_post']);

Route::get('/delete_post/{id}',[HomeController::class,'delete_post']);

Route::get('/update_post/{id}',[HomeController::class,'update_post']);

Route::post('/confirm_update/{id}',[HomeController::class,'confirm_update']);

Route::get('/post_admin', [AdminController::class, 'index'])->name('post_admin');

Route::delete('/users/{user}', [AdminController::class, 'deleteUser'])->name('delete_user');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
