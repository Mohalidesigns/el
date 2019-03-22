<?php

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


Route::get('/about', function () {
    return view('about');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/projectimage', function () {
    return view('/projectimage');
});

Route::get('/blog-details', function () {
    return view('/blog-details');
});

Route::get('/blog', function () {
    return view('/blog');
});

Route::get('/contacts', function () {
    return view('/contacts');
});
Route::get('/image-gallery', function () {
    return view('/image-gallery');
});
Route::get('/residential', function () {
    return view('/residential');
});
Route::get('/commercial', function () {
    return view('/commercial');
});
Route::get('/factories', function () {
    return view('/factories');
});
Route::get('/infrastructure', function () {
    return view('/infrastructure');
});


Route::get('image-gallery', 'ImageGalleryController@index');
Route::post('image-gallery', 'ImageGalleryController@upload');
Route::get('projectimage', 'ImageGalleryController@display');
Route::delete('image-gallery/{id}', 'ImageGalleryController@destroy');

Route::get('cproject', 'CommercialController@index');
Route::post('cproject', 'CommercialController@upload');
Route::get('commercialproject', 'CommercialController@display');
Route::delete('cproject/{id}', 'CommercialController@destroy');

Route::get('fproject', 'factoryController@index');
Route::post('fproject', 'factoryController@upload');
Route::get('factories', 'factoryController@display');
Route::delete('fproject/{id}', 'factoryController@destroy');

Route::get('iproject', 'InfraController@index');
Route::post('iproject', 'InfraController@upload');
Route::get('infrastructure', 'InfraController@display');
Route::delete('iproject/{id}', 'InfraController@destroy');


// Route::resource('contacts', 'ContactController');
// Route::get('welcome', 'ContactController@display');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/employee', 'EmployeeController@index');
Route::post('/addimage', 'EmployeeController@store')->name('addimage');
Route::get('/employeepage', 'EmployeeController@display');
Route::get('/editimage/{id}', 'EmployeeController@edit');
Route::put('/updateimage/{id}', 'EmployeeController@update');
Route::get('/deleteimage/{id}', 'EmployeeController@delete');
