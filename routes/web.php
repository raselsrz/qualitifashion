<?php

use App\Models\Role;
use App\Models\User;
use App\Models\Category;
use App\Models\Products;
use App\Models\CustomFields;
use Illuminate\Http\Request;
use App\Models\CustomOptions;
use App\Models\Category_Relation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CartController;

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





    Route::get('/', function () {

        $products = Products::all();
  
        return view('home.index', compact('products'));
    
    })->name('home');


    

    

Route::post('order', [App\Http\Controllers\ProductController::class, 'orderStore'])->name('orderStore');




//login routes
Route::get('login', [AuthController::class,'login'])->name('login');
Route::post('login', [App\Http\Controllers\AuthController::class,'postLogin'])->name('loginPost');


Route::get('logout', [AuthController::class,'logout'])->middleware('auth')->name('logout');



// route group for admin, names also
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
   
    Route::get('/', function () {
        return view('admin.pages.dashboard');
    })->name('dashboardHome');


    Route::get('dashboard', function () {
        return view('admin.pages.dashboard');
    })->name('dashboard');

    //movies manage group route , view like admin.pages.movies
    Route::group(['prefix' => 'product', 'as' => 'product.'], function () {

        Route::get('/',[App\Http\Controllers\ProductController::class, 'index'])->name('productHome');
        Route::get('add',  [ App\Http\Controllers\ProductController::class, 'add'])->name('add');
        //post add with img upload
        Route::post('add', [ App\Http\Controllers\ProductController::class, 'store']  )->name('addProccess');

        Route::get('edit/{id}', [App\Http\Controllers\ProductController::class, 'edit'] ) ->name('edit');
        //post update
        Route::post('edit/{id}', [App\Http\Controllers\ProductController::class, 'update'] )->name('update');
        
        //delete movie
        Route::get('delete/{id}',  [App\Http\Controllers\ProductController::class, 'delete'] )->name('delete');

    });

    //form manage group route , view like admin.pages.form
    Route::group(['prefix' => 'order', 'as' => 'order.'], function () {

        Route::get('/',[App\Http\Controllers\AdminController::class, 'index'])->name('orderHome');
        Route::get('view/{id}',  [ App\Http\Controllers\AdminController::class, 'view'])->name('view');
        //delete movie
        Route::get('delete/{id}',  [App\Http\Controllers\AdminController::class, 'delete'] )->name('delete');

    });

    
    


 

    Route::get('settings', [App\Http\Controllers\AdminController::class, 'settings']  )->name('settings');
    
    //store settings 
    Route::post('settings',
    [App\Http\Controllers\AdminController::class, 'settingsStore']
    )->name('settingsProccess');


    //profile 
    Route::get('profile', [App\Http\Controllers\AdminController::class, 'profile']   )->name('profile');
    //store profile
    Route::post('profile', [App\Http\Controllers\AdminController::class, 'profileStore'] )->name('profileProccess');

    
});

//product single page
Route::get('product/{slug}', function ($slug) {

    $product = Products::where('slug', $slug)->first();
    return view('home.single', compact('product', 'slug'));

})->name('product');



// fallaback route
Route::fallback(function(){
    return view('404');
});