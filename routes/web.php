<?php

use App\Http\Controllers\HomeController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [HomeController::class,'home']);
Route::get('/', [HomeController::class,'index']);

//admin
Route::middleware('auth')->prefix('admin')->group(function(){
    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index']) ->name('admin_home');
    #category
    Route::get('category',[\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
    Route::get('category/add',[\App\Http\Controllers\Admin\CategoryController::class,'add'])->name('admin_category_add');
    Route::post('category/create',[\App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');
    Route::get('category/edit/{id}',[App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}',[App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
    Route::get('category/delete/{id}',[App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_delete');
    Route::get('category/show',[App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');

    #transfer
    Route::prefix('transfer')->group(function(){
        Route::get('/',[\App\Http\Controllers\Admin\TransferController::class,'index'])->name('admin_transfers');
        Route::get('/create',[\App\Http\Controllers\Admin\TransferController::class,'create'])->name('admin_transfer_add');
        Route::post('store',[\App\Http\Controllers\Admin\TransferController::class,'store'])->name('admin_transfer_store');
        Route::get('edit/{id}',[App\Http\Controllers\Admin\TransferController::class,'edit'])->name('admin_transfer_edit');
        Route::post('update/{id}',[App\Http\Controllers\Admin\TransferController::class,'update'])->name('admin_transfer_update');
        Route::get('delete/{id}',[App\Http\Controllers\Admin\TransferController::class,'destroy'])->name('admin_transfer_delete');
        Route::get('show',[App\Http\Controllers\Admin\TransferController::class,'show'])->name('admin_transfer_show');
    });
});

Route::get('/admin/login',[HomeController::class,'login']) ->name('admin_login');
Route::post('/admin/logincheck',[HomeController::class,'logincheck']) ->name('admin_logincheck');
Route::get('/admin/logout',[HomeController::class, 'logout']) ->name('admin_logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
