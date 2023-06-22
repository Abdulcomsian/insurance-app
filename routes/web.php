<?php

use App\Http\Controllers\AccidentServiceReportController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@home')->name('home');

// Route::group(['middleware' => ['web']], function () {

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::get('sign-in', function () {return view('sign-in');})->name('sign-in');
    Route::get('sanction_request', function () {return view('sanction_request.sanction_request');})->name('sanction_request');

    // Route::get('form_request', function () {return view('form_request.form_request');})->name('form_request');
    Route::get('form-request', [HomeController::class,'formRequest'])->name('form_request');


    Auth::routes([
        'register' => false, // Registration Routes...
        'reset' => false, // Password Reset Routes...
        'verify' => false, // Email Verification Routes...
    ]);

    //By Assad Yaqoob
    //Home
    //Customer History
    // Route::match(['get', 'post'], 'customers-history', 'HomeController@customerHistory')->name('customers.history');
    // Route::get('customer-edit/{id}', 'HomeController@customerEdit')->name('customers.edit');
    // Route::view('customer-create', 'customers.create')->name('customers.create');




    // add Assessor routes
    Route::get('/assessors/create', 'AssessorController@create')->name('assessors.create');
    Route::post('/assessors', 'AssessorController@store')->name('assessors.store');
    Route::get('/assessors', 'AssessorController@index')->name('assessors.index');
    Route::get('/assessors/data', 'AssessorController@data')->name('assessors.data');

    // Repairer Controller

    Route::get('repairers', 'RepairerController@index')->name('repairer.index');
    Route::post('repairers', 'RepairerController@store')->name('repairer.store');
    Route::get('repairers/{id}/edit', 'RepairerController@edit')->name('repairer.edit');
    Route::put('repairers/{id}', 'RepairerController@update')->name('repairer.update');
    Route::delete('repairers/{id}', 'RepairerController@destroy')->name('repairer.destroy');





    Route::post('customer-update/{id}', 'HomeController@customerUpdate')->name('customers.update');
    Route::delete('customer-delete/{id}', 'HomeController@customerDelete')->name('customers.delete');
    Route::post('customer-save', 'HomeController@customerSave')->name('customers.save');

    //Users
    Route::get('users', 'HomeController@usersIndex')->name('users.index');
    Route::get('user-edit', 'HomeController@usersEdit')->name('users.edit');

    //Payment Transactions
    Route::match(['get','post'],'payment-transactions', [HomeController::class,'formRequest'])->name('payment_transactions.index');
    Route::get('payment-transaction-show/{id}', 'HomeController@paymentTransactionsShow')->name('payment_transactions.show');
    Route::post('payment-cancel', 'HomeController@paymentTransactionsCancel')->name('payment_transactions.cancel');
    Route::get('payment-transaction-resend-email/{id}', 'HomeController@paymentTransactionsResendEmail')->name('payment_transactions.resend_email');

    //Rate Management
    Route::get('packages', 'HomeController@ratesIndex')->name('rates.index');
    Route::post('package-update', 'HomeController@ratesEdit')->name('rates.update');



    //Payment Transactions
    Route::post('cancel-request','HomeController@cancel_request')->name('cancel-request');
    Route::post('company-details-save','CompanyDetailsController@store')->name('company-details.store');
    Route::post('company-details-update','CompanyDetailsController@update')->name('company-details.update');
    Route::get('company-details/{id}','CompanyDetailsController@edit')->name('company-details.edit');
    Route::get('director-delete','CompanyDetailsController@dir_delete')->name('director-delete');
});


/*Excel import export*/
Route::get('export', 'CompanyDetailsController@export')->name('export');
Route::get('import-from-excel', 'CompanyDetailsController@importView');
Route::post('import', 'CompanyDetailsController@import')->name('import');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(AccidentServiceReportController::class)->prefix('accident-accessing-service')->group( function () {
    Route::get('create', 'create')->name('accident-accessing-service.create');
    Route::post('store', 'store')->name('accident-accessing-service.store');
} );
