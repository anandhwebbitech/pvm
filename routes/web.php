<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get('companey-profile',[FrontendController::class ,'CompanyProfile'])->name('companey-profile');
Route::get('history-&-milestone',[FrontendController::class ,'HistoryAndMilestone'])->name('history-&-milestone');
Route::get('assembly-&-automation',[FrontendController::class ,'AssemblyAndAutomation'])->name('assembly-&-automation');
Route::get('machine-vision',[FrontendController::class ,'MachineVision'])->name('machine-vision');
Route::get('reliability',[FrontendController::class ,'Reliability'])->name('reliability');
Route::get('roboticautomation',[FrontendController::class ,'RoboticAutomation'])->name('roboticautomation');
Route::get('contact',[FrontendController::class ,'Contact'])->name('contact');



Route::get('product-details',[FrontendController::class ,'ProductDetails'])->name('product-details');
Route::get('news',[FrontendController::class ,'News'])->name('news');
Route::get('product-management',[FrontendController::class ,'ProductManagement'])->name('product-management');
Route::get('maintenance',[FrontendController::class ,'Maintenance'])->name('maintenance');
Route::get('factory',[FrontendController::class ,'Factory'])->name('factory');
Route::get('machinery-move',[FrontendController::class ,'MachineryMove'])->name('machinery-move');
Route::get('video-gallery',[FrontendController::class ,'VideoGallery'])->name('video-gallery');


Route::get('news-detail',[FrontendController::class ,'NewsDetails'])->name('news-detail');

// Admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminController::class, 'Login'])->name('login');
    Route::post('/login/check', [AdminController::class, 'loginCheck'])->name('login.check');
    Route::get('/dashboard', [AdminController::class, 'Dashboard'])->name('dashboard');
    ///////////////////
    Route::get('categories', [CategoryController::class,'index'])->name('categories');
    Route::post('categories/store', [CategoryController::class,'store'])->name('categorystore');
    Route::get('categories/data', [CategoryController::class,'getData'])->name('getcategorydata');
    Route::put('categories/update/{id}', [CategoryController::class,'update'])->name('categoryupdate');
    ///////////////////
    Route::get('products', [ProductController::class, 'index'])->name('products');
    Route::get('products/data', [ProductController::class, 'getData'])->name('product.data');
    Route::post('products/store', [ProductController::class, 'store'])->name('product.store');
    Route::put('products/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('products/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');
    Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
});