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
    return view('home');
});

Route::get('/contact', function () {
    return view('contact_us');
});

Route::get('/about', function () {
    return view('about_us');
});

Route::get('/services', function () {
    return view('services');
});

// Route::get('/hey', function(){
//     return "Hey Hana";

// });


// Route::get('/post/{id}/{name}', function($id,$name){
//     return "This is post number".$id ."   " . $name;
// });

// Route::get('/admin/post/example', array('as'=>'admin.home', function(){

//    $url = route('admin.home');
//    return "this is". $url;

    //   <a href="route('admin.home')"> CLICK HERE </a>;  wrong

// }));

// Route::get('/cont','NewController@index');


// Route::resource('/conto', 'NewController');

// Route::get('/conto', 'NewController@contact');

// Route::get('/conto/{id}/{name}/{email}', 'NewController@show_data');


Route::get('/Trainee/index', 'TraineesController@index');
Route::get('/Trainee/trainee', 'TraineesController@trainee');
Route::get('/Trainee/gallery', 'TraineesController@gallery');
Route::get('/Trainee/dashboard', 'TraineesController@dashboard');