<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MerchantController;
use App\Http\Middleware\AuthMiddleware;

Route::view('/', 'homepage')->name('homepage');
Route::view('/about', 'about')->name('about');
Route::view('/faq', 'faq')->name('faq');
Route::view('/contact', 'contact')->name('contact');
Route::view('/404', '404')->name('404');
Route::view('/blog', 'blog')->name('blog');

// Authentication
Route::prefix('auth')->group(function () {
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/signin', [AuthController::class, 'signin'])->name('signin');
    Route::get('/signout', [AuthController::class, 'signout'])->name('signout');
    Route::get('/', [AuthController::class, 'auth_page'])->name('auth');
});

// Merchant
Route::prefix('merchant')->middleware('auth')->group(function () {
    Route::patch('/', [MerchantController::class, 'update_merchant'])->name('update-merchant');
})->middleware(AuthMiddleware::class);

// Product
Route::prefix('product')->middleware('auth')->group(function () {
    Route::get('/{id}', [ProductController::class, 'get_product_by_id'])->name('get-product-by-id');
    Route::get('/', [ProductController::class, 'get_all_product'])->name('get-all-product');
    Route::post('/', [ProductController::class, 'create_product'])->name('create-product');
    Route::patch('/{id}', [ProductController::class, 'update_product'])->name('update-product');
    Route::delete('/{id}', [ProductController::class, 'delete_product'])->name('delete-product');
});


// Cart
Route::prefix('cart')->middleware('auth')->group(function () {
    Route::post('/{product_id}', [CartController::class, 'add_cart_item'])->name('add-cart-item');
    Route::get('/', [CartController::class, 'get_cart'])->name('get-cart');
    Route::delete('/{product_id}', [CartController::class, 'delete_cart_item'])->name('delete-cart-item');
    // Route::get('/', [CartController::class, 'cart_page'])->name('cart-page');
})->middleware(AuthMiddleware::class);

// Checkout
Route::prefix('checkout')->middleware('auth')->group(function () {
    Route::post('/', [PaymentController::class, 'checkout'])->name('checkout');
    Route::get('/', [PaymentController::class, 'checkout_page'])->name('checkout');
})->middleware(AuthMiddleware::class);

// Review
Route::prefix('review')->middleware('auth')->group(function () {
    Route::post('/{product_id}', [ReviewController::class, 'add_review'])->name('add-review');
    Route::get('/{product_id}', [ReviewController::class, 'get_review'])->name('get-review');
    Route::patch('/{product_id}', [ReviewController::class, 'update_review'])->name('update-review');
    Route::delete('/{product_id}', [ReviewController::class, 'delete_review'])->name('delete-review');
})->middleware(AuthMiddleware::class);

// User
Route::prefix('user')->middleware('auth')->group(function () {
    Route::patch('/', [UserController::class, 'update_user'])->name('update-user');
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
})->middleware(AuthMiddleware::class);

// Wishlist
Route::prefix('wishlist')->middleware('auth')->group( function () {
    Route::post('/{product_id}', [WishlistController::class, 'add_wishlist'])->name('add-wishlist');
    Route::delete('/{product_id}', [WishlistController::class, 'delete_wishlist'])->name('delete-wishlist');
    Route::get('/', [WishlistController::class, 'get_wishlist'])->name('wishlist');
})->middleware(AuthMiddleware::class);

// Testing
Route::group(['prefix' => 'testing'], function () {
    Route::view('signin', 'testing.auth.signin-auth')->name('testing-login');
    Route::view('register', 'testing.auth.register-auth')->name('testing-register');
    Route::view('logout', 'testing.auth.logout-auth')->name('testing-logout');

    Route::view('create-product', 'testing.product.create-product')->name('testing-create-product');
    Route::view('update-product', 'testing.product.update-product')->name('testing-update-product');
    Route::view('delete-product', 'testing.product.delete-product')->name('testing-delete-product');

    Route::view('add-cart-item', 'testing.cart.add-cart-item')->name('testing-add-cart-item');
    Route::view('delete-cart-item', 'testing.cart.delete-cart-item')->name('testing-delete-cart-item');

    Route::view('add-wishlist', 'testing.wishlist.add-wishlist')->name('testing-add-wishlist');
    Route::view('delete-wishlist', 'testing.wishlist.delete-wishlist')->name('testing-delete-wishlist');

    Route::view('add-review', 'testing.review.add-review')->name('testing-add-review');
    Route::view('delete-review', 'testing.review.delete-review')->name('testing-delete-review');
    Route::view('update-review', 'testing.review.update-review')->name('testing-update-review');

    Route::view('update-user', 'testing.user.update-user')->name('testing-update-user');

    Route::view('update-merchant', 'testing.merchant.update-merchant')->name('testing-update-merchant');

    Route::view('checkout', 'testing.checkout.checkout')->name('testing-checkout');
});
