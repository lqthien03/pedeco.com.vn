<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\LegalRecordController;
use App\Http\Controllers\ProfileController;
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
    Route::get('/about', 'Show')->name('');
    Route::get('/about/open-letter', 'ShowOpenLetter')->name('');
    Route::get('/about/about-us', 'ShowAboutUs')->name('');
    Route::get('/about/resource-structure', 'ShowResourceStructure')->name('');
    Route::get('/about/overview', 'ShowOverview')->name('');
    Route::get('/about/transport', 'ShowTransport')->name('');
});
Route::controller(FieldController::class)->group(function () {
    Route::get('/field_of_activity', 'Show')->name('');
});
Route::controller(LegalRecordController::class)->group(function () {
    Route::get('/legal_record', 'Show')->name('');
});
Route::controller(AboutController::class)->group(function () {
    Route::get('/about', 'Show')->name('');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
