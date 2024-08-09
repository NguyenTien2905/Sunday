<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\client\CartController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\OrderController;
use App\Http\Controllers\Client\ProductController as ClientProductController;
use App\Http\Middleware\CheckRoleAdminMiddleware;
use Illuminate\Support\Facades\Auth;
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




Auth::routes();


// Route Client

// Trang chủ
Route::get('/', [HomeController::class, 'index'])->name('client.home');
Route::get('/introduce', [HomeController::class, 'introduce'])->name('client.introduce');
Route::get('/contact', [HomeController::class, 'contact'])->name('client.contact');



// Route Show Sản phẩm
Route::get('/products/detail/{id}',     [ClientProductController::class, 'detail'])->name('product.detail');
Route::get('/products/all',            [ClientProductController::class, 'getAll'])->name('product.getAll');
Route::get('/products/categories/{id}',            [ClientProductController::class, 'getProByCat'])->name('product.getProbyCat');




//Route giỏ hàng
Route::get('/list-cart',                [CartController::class, 'listCart'])->name('cart.list');
Route::post('/add-to-cart',             [CartController::class, 'addCart'])->name('cart.add');
Route::post('/update-cart',             [CartController::class, 'updateCart'])->name('cart.update');


//Route đơn hàng
Route::middleware('auth')
    ->prefix('orders')
    ->as('orders.')
    ->group(function () {
        Route::get('/',             [OrderController::class, 'index'])->name('index');
        Route::get('/create',       [OrderController::class, 'create'])->name('create');
        Route::post('/store',       [OrderController::class, 'store'])->name('store');
        Route::get('/show/{id}',    [OrderController::class, 'show'])->name('show');
        Route::put('{id}/update',   [OrderController::class, 'update'])->name('update');
    });

// Route Admin
Route::middleware(['auth', 'auth.admin'])->prefix('admins')
    ->as('admins.')
    ->group(function () {

        Route::get('/', function () {
            return view('admins.dashbroad');
        })->name('dashbroad');

        //Route Danh mục
        Route::prefix('categories')
            ->as('categories.')
            ->group(function () {
                Route::get('/',                 [CategoryController::class, 'index'])->name('index');
                Route::get('/create',           [CategoryController::class, 'create'])->name('create');
                Route::post('/store',           [CategoryController::class, 'store'])->name('store');
                Route::get('/show/{id}',        [CategoryController::class, 'show'])->name('show');
                Route::get('{id}/edit',         [CategoryController::class, 'edit'])->name('edit');
                Route::put('{id}/update',       [CategoryController::class, 'update'])->name('update');
                Route::delete('{id}/delete',    [CategoryController::class, 'destroy'])->name('delete');
            });

        // Route Sản phẩm
        Route::prefix('products')
            ->as('products.')
            ->group(function () {
                Route::get('/',                 [ProductController::class, 'index'])->name('index');
                Route::get('/create',           [ProductController::class, 'create'])->name('create');
                Route::post('/store',           [ProductController::class, 'store'])->name('store');
                Route::get('/show/{id}',        [ProductController::class, 'show'])->name('show');
                Route::get('{id}/edit',         [ProductController::class, 'edit'])->name('edit');
                Route::put('{id}/update',       [ProductController::class, 'update'])->name('update');
                Route::delete('{id}/delete',    [ProductController::class, 'destroy'])->name('delete');
            });

         // Route Đơn hàng
         Route::prefix('orders')
         ->as('orders.')
         ->group(function () {
             Route::get('/',                 [AdminOrderController::class, 'index'])->name('index');
             Route::get('/show/{id}',        [AdminOrderController::class, 'show'])->name('show');
             Route::put('{id}/update',       [AdminOrderController::class, 'update'])->name('update');
             Route::delete('{id}/delete',    [AdminOrderController::class, 'destroy'])->name('delete');
         });

         // Route Tài khoản
         Route::prefix('users')
         ->as('users.')
         ->group(function () {
             Route::get('/',                 [AdminOrderController::class, 'index'])->name('index');
             Route::get('/show/{id}',        [AdminOrderController::class, 'show'])->name('show');
             Route::put('{id}/update',       [AdminOrderController::class, 'update'])->name('update');
             Route::delete('{id}/delete',    [AdminOrderController::class, 'destroy'])->name('delete');
         });
    });
