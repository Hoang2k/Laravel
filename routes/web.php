<?php
use App\Http\Controllers\AdminController;

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
    return view('welcome');
});

//////////admin
Route::get('/admin/home',[AdminController::class,'index']);
Route::get('/admin/listProduct',[AdminController::class,'index'])->name('admin.list.product');
Route::post('/addProduct',[AdminController::class,'addProduct'])->name('addProduct');

Route::get('/products/{id}',[AdminController::class,'getProductById']);
Route::get('/delete/product/{id}',[AdminController::class,'deleteProduct'])->name('delete.product');




Route::get('/admin-search-product',[AdminController::class,'getSearchProduct'])->name('admin.search.product');