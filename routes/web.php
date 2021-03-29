<?php

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

Route::get('/', function () {
    return view('scholarboat');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Route::prefix('admin')->group(['middleware' => ['auth', 'verified']], function () {
    //Route::resource

    //Route::get('/scholarships', 'ScholarshipController@index')->name('scholarships.index');

    //Route::get('/scholarships/add', 'ScholarshipsController@create');

    //Route::post('/scholarships', 'ScholarshipsController@store');

    //Route::get('/scholarships/{id}/edit', 'ScholarshipsController@edit');

    //Route::get('/institutions', 'InstitutionsController@index')->name('insitutions.index');

    //Route::put('/institutions/{id}/edit', 'ScholarshipsController@update');

    //Route::post('/institutions/add', 'InstitutionsController@create');
//});

/*Route::get('/scholarships', 'ScholarshipsController@index');
Route::post('/scholarships', 'ScholarshipsController@store');
Route::get('/scholarships/{id}', 'ScholarshipsController@show');

Route::get('/institutions', 'InstitutionsController@index');
Route::post('/institutions', 'InstitutionsController@store');
Route::get('/institutions/{id}', 'InstitutionsController@show');

Route::get('/about', function() {
    return view('static.about');
});

Route::get('/contact', function() {
    return view('static.contact');
});

*/
