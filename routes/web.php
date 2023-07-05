<?php

use App\Http\Controllers\AccidentServiceReportController;
use App\Http\Controllers\AssessorController;
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

Route::group(['middleware' => ['web']], function () {
    Route::get('/', [HomeController::class, 'index'])->middleware('auth')->name('home');

    Route::get('sign-in', function () {return view('sign-in');})->name('sign-in');
    Route::get('sanction_request', function () {return view('sanction_request.sanction_request');})->name('sanction_request');

    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');



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
    Route::get('/assessors/create', 'AssessorController@create')->middleware('auth')->name('assessors.create');
    Route::post('/assessors', 'AssessorController@store')->middleware('auth')->name('assessors.store');
    Route::get('/assessors', 'AssessorController@index')->middleware('auth')->name('assessors.index');
    Route::get('/assessors/data', 'AssessorController@data')->middleware('auth')->name('assessors.data');

    // Repairer Controller
    Route::get('repairers', 'RepairerController@index')->middleware('auth')->name('repairer.index');
    Route::post('repairers', 'RepairerController@store')->middleware('auth')->name('repairer.store');
    Route::get('repairers/{id}/edit', 'RepairerController@edit')->middleware('auth')->name('repairer.edit');
    Route::put('repairers/{id}', 'RepairerController@update')->middleware('auth')->name('repairer.update');
    Route::delete('repairers/{id}', 'RepairerController@destroy')->middleware('auth')->name('repairer.destroy');

    Route::post('customer-update/{id}', 'HomeController@customerUpdate')->middleware('auth')->name('customers.update');
    Route::delete('customer-delete/{id}', 'HomeController@customerDelete')->middleware('auth')->name('customers.delete');
    Route::post('customer-save', 'HomeController@customerSave')->middleware('auth')->name('customers.save');

    //Users
    // Route::get('users', 'HomeController@usersIndex')->middleware('auth')->name('users.index');
    // Route::get('user-edit', 'HomeController@usersEdit')->middleware('auth')->name('users.edit');

    //Payment Transactions
    Route::match(['get','post'],'payment-transactions', 'HomeController@formRequest')->middleware('auth')->name('payment_transactions.index');
    Route::get('payment-transaction-show/{id}', 'HomeController@paymentTransactionsShow')->middleware('auth')->name('payment_transactions.show');
    Route::post('payment-cancel', 'HomeController@paymentTransactionsCancel')->middleware('auth')->name('payment_transactions.cancel');
    Route::get('payment-transaction-resend-email/{id}', 'HomeController@paymentTransactionsResendEmail')->middleware('auth')->name('payment_transactions.resend_email');

    //Rate Management
    Route::get('packages', 'HomeController@ratesIndex')->middleware('auth')->name('rates.index');
    Route::post('package-update', 'HomeController@ratesEdit')->middleware('auth')->name('rates.update');



    //Payment Transactions
    Route::post('cancel-request','HomeController@cancel_request')->middleware('auth')->name('cancel-request');
    Route::post('company-details-save','CompanyDetailsController@store')->middleware('auth')->name('company-details.store');
    Route::post('company-details-update','CompanyDetailsController@update')->middleware('auth')->name('company-details.update');
    Route::get('company-details/{id}','CompanyDetailsController@edit')->middleware('auth')->name('company-details.edit');
    Route::get('director-delete','CompanyDetailsController@dir_delete')->middleware('auth')->name('director-delete');
});


/*Excel import export*/
Route::get('export', 'CompanyDetailsController@export')->middleware('auth')->name('export');
Route::get('import-from-excel', 'CompanyDetailsController@importView')->middleware('auth');
Route::post('import', 'CompanyDetailsController@import')->middleware('auth')->name('import');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');


Route::controller(AccidentServiceReportController::class)->middleware('auth')->prefix('accident-accessing-service')->group( function ()
{
    Route::get('/', 'index')->name('accident-accessing-service.index');
    Route::get('create', 'create')->name('accident-accessing-service.create');
    Route::post('store', 'store')->name('accident-accessing-service.store');
    Route::get('accident-report/{id}', 'accidentReport')->name('accident-report.index');
} );

