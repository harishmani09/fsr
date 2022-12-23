<?php

use App\Models\ServiceProvider;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\CallController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SignOffController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PartFailedController;
use App\Http\Controllers\InstallationController;
use App\Http\Controllers\PartReplacementController;
use App\Http\Controllers\ServiceProviderController;
use App\Http\Controllers\CustomerFeedbackController;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/reports/create', function () {
    return view('reports.create');
})->name('reports.create')->middleware('auth');

Route::get('/reports', [ServiceProviderController::class, 'index'])->name('reports')->middleware(
    'auth'
);
// Route::get('/reports/download', [ProductController::class, 'index'])->name('reports.download');
Route::get('/reports/pdf', PdfController::class)->name('reports.pdf')->middleware('auth');


Route::post('/serviceProvider', [ServiceProviderController::class, 'store']);
Route::post('/productDetails', [ProductController::class, 'store']);
Route::post('/customerDetails', [CustomerController::class, 'store']);
Route::post('/siteDetails', [SiteController::class, 'store']);
Route::post('/installationDetails', [InstallationController::class, 'store']);
Route::post('/callDetails', [CallController::class, 'store']);
Route::post('/feedbackDetails', [CustomerFeedbackController::class, 'store']);
Route::post('/partReplacement', [PartReplacementController::class, 'store']);
Route::post('/partFailed', [PartFailedController::class, 'store']);
Route::post('/signoff', [SignOffController::class, 'store']);
Route::post('/expenses', [ExpenseController::class, 'store']);
