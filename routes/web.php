<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\paymentController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\RiskController;
use App\Http\Controllers\applicationController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/invoices', [ InvoiceController::class, 'index']);
Route::get('/invoices-create', [InvoiceController::class, 'create']);


Route::get('/payments', [paymentController::class, 'pay']);
Route::get('/enquiry', [EnquiryController::class, 'enquire']);
Route::get('/update', [UpdateController::class, 'Updates']);
Route::get('/delete', [DeleteController::class, 'Deleted']);
Route::get('/risk', [RiskController::class, 'Risks']);

Route::get('/users', function () {
    return view('users');
});

Route::get('/application', function () {
    return view('application');
});
Route::get('/confirmation', function () {
    return view('confirmation');
});
Route::get('/approval', function () {
    return view('approval');
});



