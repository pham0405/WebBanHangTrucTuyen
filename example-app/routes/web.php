<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\HomepageController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\CheckoutController;

// Client routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::prefix('/')->group(function () {
    Route::get('/', [HomepageController::class, 'index'])->name('homepage');
    Route::get('/lienhe', [HomepageController::class, 'contact'])->name('contact');
    Route::get('/sanpham', [HomepageController::class, 'products'])->name('product');
    Route::get('/chinhsach', [HomepageController::class, 'Orther'])->name('orther');
    Route::get('/product/{id}', [HomepageController::class, 'showProduct'])->name('products.detail');
    Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->middleware('auth')->name('cart.add');
    Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');
    Route::get('/cart/items', [HomepageController::class, 'getCartItems'])->name('cart.items');
    Route::get('/cart/count', [CartController::class, 'getCartCount']);
    Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
    Route::patch('/cart/update/{id}', [CartController::class, 'updateQuantity'])->name('cart.update');
    Route::post('/products/{productId}/comments', [HomepageController::class, 'addComment'])->name('comments.add');
    Route::get('/products/category/{categoryId}', [HomepageController::class, 'productsByCategory'])->name('products.byCategory');
    Route::get('/product/search', [HomepageController::class, 'products'])->name('product.search');
    Route::get('/gioithieu', [HomepageController::class, 'gioithieu'])->name('gioithieu');
    Route::post('/thanhtoan', [HomepageController::class, 'thanhtoan'])->name('checkout');
    // Route::post('/momo_payment', [CheckoutController::class, 'momo_payment'])->name('momo_payment');
    // Route::post('/vnpay_payment', [CheckoutController::class, 'vnpay_payment'])->name('vnpay_payment');
    Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
    Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');
    Route::post('/contact', [ContactController::class, 'sendMail'])->name('contact.send');


});


// Admin routes
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/products', [ProductController::class, 'index'])->name('admin.products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('admin.products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('admin.products.store');
    Route::get('/products/{id}', [ProductController::class, 'show'])->name('admin.products.show');
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
    Route::put('/products/{id}', [ProductController::class, 'update'])->name('admin.products.update');
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('admin.products.destroy');
    Route::get('/category', [CategoryController::class, 'index'])->name('admin.category');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('/category', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::get('/category/{id}', [CategoryController::class, 'show'])->name('admin.category.show');
    Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::put('/category/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');
    Route::get('/account', [UsersController::class, 'index'])->name('admin.account');
    Route::get('/comment', [AdminController::class, 'comment'])->name('admin.comment');
    Route::get('/orders', [AdminController::class, 'orders'])->name('admin.orders');
    Route::get('/ordersDetail', [AdminController::class, 'ordersDetail'])->name('admin.ordersDetail');
});

// Authentication routes
require __DIR__ . '/auth.php';
