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

Route::get('/scholarships', 'ScholarshipController@index');
Route::get('/scholarships/{id}', 'ScholarshipController@show');

Route::get('/institutions', 'InstitutionController@index');
Route::get('/institutions/{id}', 'InstitutionsController@show');
/*


Route::get('/institution/{id}')
    return view('contact');
}); 

Route::get('/about'  function () {
    return view('about');
});

Route::get('/contact')
    return view('contact');
});



*/
