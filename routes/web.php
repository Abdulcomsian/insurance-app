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

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);
//By Assad Yaqoob
//Home
Route::get('/', 'HomeController@index')->name('home');

//Customer History
Route::get('customers-history', 'HomeController@customerHistory')->name('customers.history');
Route::get('customer-edit/{id}', 'HomeController@customerEdit')->name('customers.edit');
Route::post('customer-update/{id}', 'HomeController@customerUpdate')->name('customers.update');
Route::delete('customer-delete/{id}', 'HomeController@customerDelete')->name('customers.delete');
Route::post('customer-save', 'HomeController@customerSave')->name('customers.save');

//Users
Route::get('users', 'HomeController@usersIndex')->name('users.index');
Route::get('user-edit', 'HomeController@usersEdit')->name('users.edit');

//Insurance Companies Management
Route::match(['get','post'],'insurance-companies', 'HomeController@indexWithDatatable')->name('insurance_companies.index');
//Route::match(['get','post'],'insurance-companies', 'HomeController@insuranceCompaniesIndex')->name('insurance_companies.index');
Route::get('insurance-companies-edit', 'HomeController@insuranceCompaniesEdit')->name('insurance_companies.edit');
Route::get('insurance-company-create', 'HomeController@insuranceCompaniesCreate')->name('insurance_companies.create');
Route::post('insurance-company-save', 'HomeController@insuranceCompaniesSave')->name('insurance_companies.save');

//Payment Transactions
Route::get('payment-transactions', 'HomeController@paymentTransactionsIndex')->name('payment_transactions.index');
Route::get('payment-transactions-edit', 'HomeController@paymentTransactionsEdit')->name('payment_transactions.edit');

//Rate Management
Route::get('packages', 'HomeController@ratesIndex')->name('rates.index');
Route::post('package-update', 'HomeController@ratesEdit')->name('rates.update');

//Countries Management
Route::get('countries', 'HomeController@countriesIndex')->name('countries.index');
Route::get('countries-edit', 'HomeController@countriesEdit')->name('countries.edit');
Route::post('countries-update/{id}', 'HomeController@countriesUpdate')->name('countries.update');

