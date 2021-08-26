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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('sign-in', function () {
    return view('sign-in');
})->name('sign-in');

Route::get('sanction_request', function () {
    return view('sanction_request.sanction_request');
})->name('sanction_request');

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);
//By Assad Yaqoob
//Home
Route::get('/', 'HomeController@index')->name('home');


//Customer History
Route::match(['get','post'],'customers-history', 'HomeController@customerHistory')->name('customers.history');
Route::get('customer-edit/{id}', 'HomeController@customerEdit')->name('customers.edit');
Route::view('customer-create','customers.create')->name('customers.create');
Route::post('customer-update/{id}', 'HomeController@customerUpdate')->name('customers.update');
Route::delete('customer-delete/{id}', 'HomeController@customerDelete')->name('customers.delete');
Route::post('customer-save', 'HomeController@customerSave')->name('customers.save');

//Users
Route::get('users', 'HomeController@usersIndex')->name('users.index');
Route::get('user-edit', 'HomeController@usersEdit')->name('users.edit');

//Insurance Companies Management
Route::match(['get','post'],'insurance-companies', 'HomeController@indexWithDatatable')->name('insurance_companies.index');
Route::get('insurance-companies-edit/{id}', 'HomeController@insuranceCompaniesEdit')->name('insurance_companies.edit');
Route::get('insurance-company-create', 'HomeController@insuranceCompaniesCreate')->name('insurance_companies.create');
Route::post('insurance-company-save', 'HomeController@insuranceCompaniesSave')->name('insurance_companies.save');

//Payment Transactions
Route::match(['get','post'],'payment-transactions', 'HomeController@paymentTransactionsIndex')->name('payment_transactions.index');
Route::get('payment-transaction-show/{id}', 'HomeController@paymentTransactionsShow')->name('payment_transactions.show');
Route::post('payment-cancel', 'HomeController@paymentTransactionsCancel')->name('payment_transactions.cancel');
Route::get('payment-transaction-resend-email/{id}', 'HomeController@paymentTransactionsResendEmail')->name('payment_transactions.resend_email');

//Rate Management
Route::get('packages', 'HomeController@ratesIndex')->name('rates.index');
Route::post('package-update', 'HomeController@ratesEdit')->name('rates.update');

//Countries Management
Route::get('countries', 'HomeController@countriesIndex')->name('countries.index');
Route::get('countries-edit', 'HomeController@countriesEdit')->name('countries.edit');
Route::post('countries-update/{id}', 'HomeController@countriesUpdate')->name('countries.update');

//Payment Transactions
Route::match(['get','post'],'sanction-request', 'HomeController@sanctionRequestIndex')->name('sanction_request.index');
Route::get('sanction-request-show/{id}', 'HomeController@sanctionRequestShow')->name('sanction_request.show');
Route::post('sanc-save-attachment','HomeController@sanc_save_attachment')->name('sanc-save-attachment');
Route::post('sanc-send-attachment','HomeController@sanc_send_attachment')->name('sanc-send-attachment');
Route::get('delete-attachements/{id}','HomeController@delete_attachements')->name('delete-attachements');
Route::post('cancel-request','HomeController@cancel_request')->name('cancel-request');

