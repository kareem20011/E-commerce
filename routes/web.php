<?php


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\website\CartController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\MainCategoryProductsController;
use App\Http\Controllers\Website\ProductController;
use App\Http\Controllers\Website\SubCategoryProductsController;
// use App\Models\User;
// use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
// use Illuminate\Http\Request;




Route::get('/', [HomeController::class, 'index']);

Route::resource('website/product', ProductController::class)->names('website.product');
Route::get('website/main_category/all/{cat_id}', [MainCategoryProductsController::class, 'index'])->name('main.category.products');
Route::get('website/sub_category/all/{cat_id}', [SubCategoryProductsController::class, 'index'])->name('sub_category.products');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/update', [UserProfileController::class, 'update'])->name('test');
});

Route::middleware('auth')->prefix('website')->group(function () {
    Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
});

require __DIR__.'/auth.php';

