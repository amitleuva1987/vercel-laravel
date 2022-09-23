<?php

use App\Http\Controllers\ActiveCampaignController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ActiveCampaignController::class, 'page1']);
Route::get('/vsl', [ActiveCampaignController::class, 'page2']);
Route::get('/survey', [ActiveCampaignController::class, 'page3']);
Route::get('/v1-schedule', [ActiveCampaignController::class, 'page4'])->name('schedule');
Route::get('/success-v2', [ActiveCampaignController::class, 'page5']);
Route::post('/store_contact', [ActiveCampaignController::class, 'storeContact'])->name('store_contact');
Route::get('/store_page_two_tags', [ActiveCampaignController::class, 'storePage2tags'])->name('store_page_two_tags');
Route::post('/store_page_three_tags', [ActiveCampaignController::class, 'storePage3tags'])->name('store_page_three_tags');
Route::get('/store_page_four_tags', [ActiveCampaignController::class, 'storePage4tags'])->name('store_page_four_tags');