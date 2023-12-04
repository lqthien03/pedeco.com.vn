<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\LegalRecordController;
use App\Http\Controllers\PartnerCustomerController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::controller(AboutController::class)->group(function () {
    Route::get('/about', 'show')->name('');
});

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'show')->name('');
});

Route::controller(FieldController::class)->group(function () {
    Route::get('/field-of-activity', 'show')->name('');
    return view('field_of_activity');
});

Route::controller(LegalRecordController::class)->group(function () {
    Route::get('/legal-record', 'show')->name('');
    return view('legal_record');
});

Route::controller(PartnerCustomerController::class)->group(function () {
    Route::get('/partner-customer', 'show')->name('');
    return view('partner_customer');
});

Route::controller(PartnerCustomerController::class)->group(function () {
    Route::get('/partner-customer', 'show')->name('');
    return view('partner_customer');
});

