<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Add User 
Route::get('/',[UserController::class, 'index']);
Route::get('/add-user',[UserController::class, 'AddUserPage']);

// Pages 

Route::get('/add-page',[PageController::class, 'Add_Page']);
Route::get('/all-pages',[PageController::class, 'AllPages']);
Route::get('/editpage/{id}',[PageController::class, 'editpage'])->name('edit.page');
Route::get('/deletepage/{id}',[PageController::class, 'deletepage'])->name('delete.page');
Route::post('/postpage',[PageController::class, 'postpage']);
Route::post('/updatePage/{id}',[PageController::class, 'updatePage']);
Route::get('/getpages',[PageController::class, 'getpages']);




//user page
Route::get('/login-page',[PageController::class, 'LoginPage']);
Route::get('/register-page',[PageController::class, 'RegisterPage']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
