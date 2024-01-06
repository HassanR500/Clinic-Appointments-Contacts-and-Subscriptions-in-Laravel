<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\UserController;


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
    return view('frontend.index');
});

Route::get('/aboutus', function () {
    return view('frontend.aboutus');
});

Route::get('/bloggrid', function () {
    return view('frontend.bloggrid');
});

Route::get('/blogdetails', function () {
    return view('frontend.blogdetails');
});

Route::get('/booking', function () {
    return view('frontend.booking');
});

Route::get('/error404', function () {
    return view('frontend.error404');
});

Route::get('/faq', function () {
    return view('frontend.faq');
});

Route::get('/services', function () {
    return view('frontend.services');
});

Route::get('/servicedetail', function () {
    return view('frontend.servicedetail');
});

Route::get('/team', function () {
    return view('frontend.team');
});

Route::get('/contactus', function () {
    return view('frontend.contactus');
});

Auth::routes();

Route::resource('users', UserController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/submit-appointment', [AppointmentController::class, 'store'])->name('submit.appointment');
Route::post('/submit-contact', [ContactController::class, 'store'])->name('submit.contact');
Route::post('/submit-subscription', [SubscriptionController::class, 'store'])->name('submit.subscription');

Route::get('/appointments', [App\Http\Controllers\AppointmentController::class, 'index'])->name('appointments-new');
Route::get('/contacts', [App\Http\Controllers\ContactController::class, 'index'])->name('contact-new');
Route::get('/subscriptions', [App\Http\Controllers\SubscriptionController::class, 'index'])->name('subscription-new');

Route::delete('/appointments/{id}', [AppointmentController::class, 'destroy'])->name('appointments.destroy');
Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');
Route::delete('/subscriptions/{id}', [SubscriptionController::class, 'destroy'])->name('subscriptions.destroy');

Route::delete('/appointments', [AppointmentController::class, 'deleteAllAppointments'])
->name('appointments.deleteAll');

Route::delete('/subscriptions', [SubscriptionController::class, 'deleteAllSubscriptions'])
->name('subscriptions.deleteAll');

Route::delete('/contacts', [ContactController::class, 'deleteAllContacts'])
->name('contacts.deleteAll');
