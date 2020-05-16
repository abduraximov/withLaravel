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
//homepage and news and newsmore 
Route::get('/', 'newController@welcome') -> name('welcome');

Route::get('/more/{id}', 'newController@more') -> name('more');

Route::get('/about', 'newController@about') -> name('about');

Route::get('/work', 'newController@work') -> name('work');

Route::get('/price', 'newController@price') -> name('price');

Route::get('/example', 'newController@example') -> name('example');

Route::get('/service', 'newController@service') -> name('service');

Route::get('/contact', 'newController@contact') -> name('contact');

//Appointment
Route::post('appointment', 'newController@makeAppointment') -> name('appointment');

Route::post('/feedback', 'newController@feedbackStore') -> name('contact.store');

//Admin routes
Route::prefix('admin')->group(function(){
      
    Route::get('/', function(){
     return redirect()->route('posts.index');
    })->name('dashboard');

    
   
    Route::resource('posts', 'Admin\\PostsController');
//feedback routes    
    

    Route::get('feedbacks' , 'Admin\\FeedbacksController@index') -> name('feedbacks');  

    Route::get('feedbacks{id}/show' , 'Admin\\FeedbacksController@show') -> name('feedbacks.show');  

    Route::delete('feedbacks{id}/delete' , 'Admin\\FeedbacksController@delete') -> name('feedbacks.delete');

});