<?php

use App\Http\Controllers\FrontendController;
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

