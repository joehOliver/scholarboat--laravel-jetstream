<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScholarshipsController;
use App\Http\Controllers\InstitutionsController;

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

// Home page
Route::get('/', function () {
    return view('scholarboat');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/scholarships', [ScholarshipsController::class, 'index']);
Route::get('/institutions', [InstitutionsController::class, 'index']);

// Admin only routes
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::post('/scholarships', [ScholarshipsController::class, 'store']);
    Route::get('/scholarships/add', [ScholarshipsController::class, 'create']);
    Route::get('/scholarships/{id}/edit', [ScholarshipsController::class, 'edit']);
    Route::put('/scholarships/{id}', [ScholarshipsController::class, 'update']);
    Route::post('/institutions', [InstitutionsController::class, 'store']);
    Route::get('/institutions/add', [InstitutionsController::class, 'create']);
    Route::get('/institutions/{id}/edit', [InstitutionsController::class, 'edit']);
    Route::put('/institutions/{id}', [InstitutionsController::class, 'update']);
});

Route::get('/scholarships/{scholarship}', [ScholarshipsController::class, 'show'])->name('scholarships.show');
Route::get('/institutions/{scholarship}', [InstitutionsController::class, 'show'])->name('institutions.show');

Route::get('/about', function() {
    return view('static.about');
});

