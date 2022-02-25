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

Route::get('/dashboard', 'App\Http\Controllers\PagesController@dashboard')->middleware(['auth'])->name('dashboard');
Route::post('/dashboard', 'App\Http\Controllers\PagesController@saveHome')->middleware(['auth'])->name('saveHome');

Route::get('/', 'App\Http\Controllers\PagesController@home')->name('home');


Route::get('/talents', 'App\Http\Controllers\PagesController@talents')->name('talents');
Route::get('/talents-page', 'App\Http\Controllers\PagesController@talents_page')->middleware(['auth'])->name('talents_page');
Route::post('/talents-page', 'App\Http\Controllers\PagesController@saveTalents')->middleware(['auth'])->name('saveTalents');

Route::get('/employers', 'App\Http\Controllers\PagesController@employers')->name('employers');
Route::get('/employers-page', 'App\Http\Controllers\PagesController@employers_page')->middleware(['auth'])->name('employers_page');
Route::post('/employers-page', 'App\Http\Controllers\PagesController@saveEmployers')->middleware(['auth'])->name('saveEmployers');

Route::get('/events', 'App\Http\Controllers\EventsController@getAllEvents')->middleware(['auth'])->name('events');
Route::post('/events-searh', 'App\Http\Controllers\EventsController@searchEvents')->name('eventsSearch');
Route::post('/order-events', 'App\Http\Controllers\EventsController@orderEvents')->name('orderEvents');
Route::post('/send-mail', 'App\Http\Controllers\EventsController@sendMail')->name('sendMail');

Route::get('/candidate-register', function () {
    return view('register/candidate');
});
Route::get('/employer-register', function () {
    return view('register/employer');
});
Route::post('/candidate-register', 'App\Http\Controllers\CandidateController@insert')->name('candidate-register-post');
Route::get('/candidate-confirmed/{id}', 'App\Http\Controllers\CandidateController@confirmedEmail');
Route::post('/candidate-register-confirmed', 'App\Http\Controllers\CandidateController@confirmed')->name('candidate-register-post-confirmed');


//Routes Employer
Route::post('/employer-register', 'App\Http\Controllers\EmployerController@insert')->name('employer-register-post');

//Routes Admin
Route::get('/admin-users', 'App\Http\Controllers\UsersController@getUsers')->middleware(['auth'])->name('admin-users');
Route::get('/delete-users/{id}', 'App\Http\Controllers\UsersController@getUsers')->middleware(['auth'])->name('delete-users');
Route::get('/activate-user/{id}/{active}', 'App\Http\Controllers\UsersController@activate')->middleware(['auth'])->name('activate-users');
Route::post('/insert-users', 'App\Http\Controllers\Auth\RegisteredUserController@insert')->middleware(['auth'])->name('insert-users');
Route::get('/register-event', 'App\Http\Controllers\EventsController@getAllEventsAdmin')->middleware(['auth']);
Route::get('/delete-event/{id}', 'App\Http\Controllers\EventsController@deleteEvent')->middleware(['auth']);
Route::post('/insert-events', 'App\Http\Controllers\EventsController@insertEvents')->middleware(['auth'])->name('insertEvents');
Route::get('/insert-events', 'App\Http\Controllers\EventsController@getAllEventsAdmin')->middleware(['auth']);

Route::get('/admin-employers', 'App\Http\Controllers\EmployerController@getEmployers')->middleware(['auth'])->name('admin-employers');
Route::post('/insert-employers', 'App\Http\Controllers\EmployerController@insertEmployers')->middleware(['auth'])->name('insert-employers');
Route::get('/employers/export', 'App\Http\Controllers\EmployerController@export')->middleware(['auth'])->name('employers-export');

Route::get('/admin-candidates', 'App\Http\Controllers\CandidateController@getCandidates')->middleware(['auth'])->name('admin-candidates');
Route::post('/insert-candidates', 'App\Http\Controllers\CandidateController@insertCandidates')->middleware(['auth'])->name('insert-candidates');
Route::get('/candidates/export', 'App\Http\Controllers\CandidateController@export')->middleware(['auth'])->name('candidates-export');

require __DIR__.'/auth.php';
