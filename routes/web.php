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





//Frontend
Route::get('/','FrontendController@home')->name('homepage');
Route::get('register','FrontendController@register')->name('registerpage');
Route::get('login','FrontendController@login')->name('loginpage');
// Route::get('checkout','FrontendController@checkout')->name('checkoutpage');
Route::get('profile','FrontendController@profile')->name('profilepage');

Route::resource('index', 'FormController'); //7 (get-4/post-1/put-1/delete-1)
Route::get('stuinfo','FrontendController@stuinfo')->name('stuinfo');
Route::resource('edu', 'EducationformController'); //7 (get-4/post-1/put-1/delete-1)
Route::resource('finan', 'FinancialformController'); //7 (get-4/post-1/put-1/delete-1)







 Route::middleware('role:admin')->group(function () {


Route::get('dashboard', 'BackendController@dashboard')->name('dashboard');

Route::resource('students', 'StudentController'); //7 (get-4/post-1/put-1/delete-1)
Route::resource('educations', 'EducationController'); //7 (get-4/post-1/put-1/delete-1)
Route::resource('financials', 'FinancialController'); //7 (get-4/post-1/put-1/delete-1)
Route::resource('loans', 'LoanController'); //7 (get-4/post-1/put-1/delete-1)
Route::resource('payments', 'PaymentController'); //7 (get-4/post-1/put-1/delete-1)
Route::resource('educationdetails', 'EducationdetailController'); //7 (get-4/post-1/put-1/delete-1)
Route::resource('financialinfos', 'FinancialinfoController'); //7 (get-4/post-1/put-1/delete-1)
Route::post('stuinfo','FrontendController@stuinfo')->name('stuinfo');
});


<<<<<<< HEAD
//Frontend
Route::get('/','FrontendController@home')->name('homepage');
Route::get('register','FrontendController@register')->name('registerpage');
Route::get('login','FrontendController@login')->name('loginpage');
// Route::get('checkout','FrontendController@checkout')->name('checkoutpage');
Route::get('profile','FrontendController@profile')->name('profilepage');
Route::get('about','FrontendController@about')->name('about');
Route::get('contact','FrontendController@contact')->name('contact');
=======
>>>>>>> 9286ad19f89839ffa759c13973dc95d2373a6670





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
