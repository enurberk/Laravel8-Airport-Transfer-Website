<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

//Route::get('/', [HomeController::class,'home']);
Route::get('/', [HomeController::class,'index'])->name('home');

//Route::get('/home', [HomeController::class,'home'])->name('homepage');
Route::get('/aboutus', [HomeController::class,'aboutus'])->name('aboutus');
Route::get('/references', [HomeController::class,'references'])->name('references');
Route::get('/booking', [HomeController::class,'booking'])->name('booking');
Route::get('/services', [HomeController::class,'services'])->name('services');
Route::get('/vehicles', [HomeController::class,'vehicles'])->name('vehicles');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::get('/faq', [HomeController::class,'faq'])->name('faq');
Route::get('/blog', [HomeController::class,'blog'])->name('blog');
Route::get('/blog/1', [HomeController::class,'blog1'])->name('blog1');
Route::get('/blog/2', [HomeController::class,'blog2'])->name('blog2');
Route::get('/blog/3', [HomeController::class,'blog3'])->name('blog3');
Route::post('/sendmessage', [HomeController::class,'sendmessage'])->name('sendmessage');
Route::get('/blogcontent', [HomeController::class,'blogcontent'])->name('blogcontent');
Route::get('/transfer/{id}/{slug}', [HomeController::class,'transfer'])->name('transfer');
Route::get('/categorytransfers/{id}/{slug}', [HomeController::class,'categorytransfers'])->name('categorytransfers');


//admin
Route::middleware('auth')->prefix('admin')->group(function(){

    //admin role
    Route::middleware('admin')->group(function(){

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
        Route::get('create',[\App\Http\Controllers\Admin\TransferController::class,'create'])->name('admin_transfer_add');
        Route::post('store',[\App\Http\Controllers\Admin\TransferController::class,'store'])->name('admin_transfer_store');
        Route::get('edit/{id}',[App\Http\Controllers\Admin\TransferController::class,'edit'])->name('admin_transfer_edit');
        Route::post('update/{id}',[App\Http\Controllers\Admin\TransferController::class,'update'])->name('admin_transfer_update');
        Route::get('delete/{id}',[App\Http\Controllers\Admin\TransferController::class,'destroy'])->name('admin_transfer_delete');
        Route::get('show',[App\Http\Controllers\Admin\TransferController::class,'show'])->name('admin_transfer_show');
    });

    #message
    Route::prefix('messages')->group(function(){
        Route::get('/',[\App\Http\Controllers\Admin\MessageController::class,'index'])->name('admin_message');
        Route::get('edit/{id}',[App\Http\Controllers\Admin\MessageController::class,'edit'])->name('admin_message_edit');
        Route::post('update/{id}',[App\Http\Controllers\Admin\MessageController::class,'update'])->name('admin_message_update');
        Route::get('delete/{id}',[App\Http\Controllers\Admin\MessageController::class,'destroy'])->name('admin_message_delete');
        Route::get('show',[App\Http\Controllers\Admin\MessageController::class,'show'])->name('admin_message_show');
    });

    #Transfer Image Gallery
    Route::prefix('image')->group(function(){
        Route::get('create/{transfer_id}',[\App\Http\Controllers\Admin\ImageController::class,'create'])->name('admin_image_add');
        Route::post('store/{transfer_id}',[\App\Http\Controllers\Admin\ImageController::class,'store'])->name('admin_image_store');
        Route::get('delete/{id}/{transfer_id}',[App\Http\Controllers\Admin\ImageController::class,'destroy'])->name('admin_image_delete');
        Route::get('show',[App\Http\Controllers\Admin\ImageController::class,'show'])->name('admin_image_show');
    });

    #Setting
    Route::get('setting',[\App\Http\Controllers\Admin\SettingController::class,'index'])->name('admin_setting');
    Route::post('setting/update',[App\Http\Controllers\Admin\SettingController::class,'update'])->name('admin_setting_update');

    #rezervation
    Route::prefix('rezervation')->group(function(){
        Route::get('/',[\App\Http\Controllers\Admin\RezervationController::class,'index'])->name('admin_rezervation');
        Route::get('list/{status}',[\App\Http\Controllers\Admin\RezervationController::class,'list'])->name('admin_rezervation_list');
        Route::get('create',[\App\Http\Controllers\Admin\RezervationController::class,'create'])->name('admin_rezervation_add');
        Route::post('store',[\App\Http\Controllers\Admin\RezervationController::class,'store'])->name('admin_rezervation_store');
        Route::get('edit/{id}',[\App\Http\Controllers\Admin\RezervationController::class,'edit'])->name('admin_rezervation_edit');
        Route::post('update/{id}',[\App\Http\Controllers\Admin\RezervationController::class,'update'])->name('admin_rezervation_update');
        Route::get('delete/{id}',[\App\Http\Controllers\Admin\RezervationController::class,'destroy'])->name('admin_rezervation_delete');
        Route::get('show/{id}',[\App\Http\Controllers\Admin\RezervationController::class,'show'])->name('admin_rezervation_show');
    });

    #user
        Route::prefix('user')->group(function(){
            Route::get('/',[\App\Http\Controllers\Admin\UserController::class,'index'])->name('admin_users');
            Route::post('create',[\App\Http\Controllers\Admin\UserController::class,'create'])->name('admin_user_add');
            Route::post('store',[\App\Http\Controllers\Admin\UserController::class,'store'])->name('admin_user_store');
            Route::get('edit/{id}',[\App\Http\Controllers\Admin\UserController::class,'edit'])->name('admin_user_edit');
            Route::post('update/{id}',[\App\Http\Controllers\Admin\UserController::class,'update'])->name('admin_user_update');
            Route::get('delete/{id}',[\App\Http\Controllers\Admin\UserController::class,'destroy'])->name('admin_user_delete');
            Route::get('show/{id}',[\App\Http\Controllers\Admin\UserController::class,'show'])->name('admin_rezervation_show');
            Route::get('userrole/{id}',[\App\Http\Controllers\Admin\UserController::class,'user_roles'])->name('admin_user_roles');
            Route::post('userrolestore/{id}',[\App\Http\Controllers\Admin\UserController::class,'user_role_store'])->name('admin_user_role_add');
            Route::get('userroledelete/{userid}/{roleid}',[\App\Http\Controllers\Admin\UserController::class,'user_role_delete'])->name('admin_user_role_delete');

        });

    }); //role
}); //admin

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function(){
    Route::get('/', [\App\Http\Controllers\UserController::class, 'index']) ->name('myprofile');

});

Route::middleware('auth')->prefix('user')->namespace('user')->group(function(){
    Route::get('/profile', [\App\Http\Controllers\UserController::class, 'index']) ->name('userprofile');

    #rezervation
    Route::prefix('rezervation')->group(function(){
        Route::get('/',[\App\Http\Controllers\RezervationController::class,'index'])->name('user_rezervation');
        Route::get('create',[\App\Http\Controllers\RezervationController::class,'create'])->name('user_rezervation_add');
        Route::post('store',[\App\Http\Controllers\RezervationController::class,'store'])->name('user_rezervation_store');
        Route::get('edit/{id}',[\App\Http\Controllers\RezervationController::class,'edit'])->name('user_rezervation_edit');
        Route::post('update/{id}',[\App\Http\Controllers\RezervationController::class,'update'])->name('user_rezervation_update');
        Route::get('delete/{id}',[\App\Http\Controllers\RezervationController::class,'destroy'])->name('user_rezervation_delete');
        Route::get('show/{id}',[\App\Http\Controllers\RezervationController::class,'show'])->name('user_rezervation_show');
    });


});

Route::get('/admin/login',[HomeController::class,'login']) ->name('admin_login');
Route::post('/admin/logincheck',[HomeController::class,'logincheck']) ->name('admin_logincheck');
Route::get('/logout',[HomeController::class, 'logout']) ->name('logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
