<?php


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\ProductController;
// use App\Models\User;
// use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
// use Illuminate\Http\Request;




Route::get('/', [HomeController::class, 'index']);

Route::resource('website/products', ProductController::class)->names('website.product');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/update', [UserProfileController::class, 'update'])->name('test');
});

require __DIR__.'/auth.php';

