<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrackTemplateController;

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


Route::get('/login', fn() => view('auth.login'))->name('login');
Route::get('/register', fn() => view('auth.register'))->name('register');
Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');



// sales
Route::get('/cash-sales', [TrackTemplateController::class, 'index'])->name('sales.cash-sales');

// Route::get('/cash-sales', fn() => view('sales.cash-sales'))->name('cash');
Route::get('/commercial-invoice', fn() => view('sales.commercial-invoice'))->name('commercial');
Route::get('/invoice', fn() => view('sales.invoice'))->name('invoice');
Route::get('/profoma-invoice', fn() => view('sales.profoma-invoice'))->name('profoma');
Route::get('/tax-invoice', fn() => view('sales.tax-invoice'))->name('tax');
Route::get('/Quatation', fn() => view('sales.Quatation'))->name('Quatation');
Route::get('/sales-order', fn() => view('sales.sales-order'))->name('sales-order');
Route::get('/Item-fullfillment', fn() => view('sales.Item-fullfillment'))->name('Item');

// Purchase
Route::get('/bill-payment', fn() => view('purchase.bill-payment'))->name('bill');
Route::get('/blanket-purchase-order', fn() => view('purchase.blanket-purchase-order'))->name('commercial');
Route::get('/delivery-note', fn() => view('purchase.delivery-note'))->name('delivery');
Route::get('/item-reciept', fn() => view('purchase.item-reciept'))->name('item-reciept');
Route::get('/purchase-order', fn() => view('purchase.purchase-order'))->name('purchase');
Route::get('/purchase-requisition', fn() => view('purchase.purchase-requisition'))->name('purchase-requisition');
Route::get('/return-authorisation', fn() => view('purchase.return-authorisation'))->name('return');

// Template

Route::get('/credit-note', fn() => view('templates.credit-note'))->name('credit');
Route::get('/debit-note', fn() => view('templates.debit-note'))->name('debit-note');
Route::get('/cheque', fn() => view('templates.cheque'))->name('cheque');
Route::get('/customer-statement', fn() => view('templates.customer-statement'))->name('customer-statement');
Route::get('/customer-payment', fn() => view('templates.customer-payment'))->name('customer-payment');
Route::get('/journal-entry', fn() => view('templates.journal-entry'))->name('journal-entry');
Route::get('/customer-deposit', fn() => view('templates.customer-deposit'))->name('customer-deposit');
Route::get('/expensive-report', fn() => view('templates.expensive-report'))->name('expensive-report');


//client uploaded template


Route::get('/uploaded', fn() => view('client.uploaded'))->name('uploaded');
// Route::resource('/uploaded',TrackTemplateController::class)->except(['show','edit','update','delete']);



Route::get('/uploaded-cashsales', fn() => view('client.uploaded-cashsales'))->name('uploaded-cashsales');
Route::get('/uploaded-commercial-invoice', fn() => view('client.uploaded-commercial-invoice'))->name('uploaded-commercial-invoice');
Route::get('/uploaded-tax-invoice', fn() => view('client.uploaded-tax-invoice'))->name('uploaded-tax-invoice');
Route::get('/uploaded-profoma-invoice', fn() => view('client.uploaded-profoma-invoice'))->name('uploaded-profoma-invoice');
Route::get('/uploaded-invoice', fn() => view('client.uploaded-invoice'))->name('uploaded-invoice');
Route::get('/uploaded-quatation', fn() => view('client.uploaded-quatation'))->name('uploaded-quatation');
Route::get('/uploaded-sales-order', fn() => view('client.uploaded-sales-order'))->name('uploaded-sales-order');
Route::get('/uploaded-item-fullfillment', fn() => view('client.uploaded-item-fullfillment'))->name('uploaded-item-fullfillment');
Route::get('/uploaded-purchase-order', fn() => view('client.uploaded-purchase-order'))->name('uploaded-purchase-order');
Route::get('/uploaded-blanket-purchase-order', fn() => view('client.uploaded-blanket-purchase-order'))->name('uploaded-blanket-purchase-order');
Route::get('/uploaded-delivery-note', fn() => view('client.uploaded-delivery-note'))->name('uploaded-delivery-note');
Route::get('/uploaded-return-authorisation', fn() => view('client.uploaded-return-authorisation'))->name('uploaded-return-authorisation');
Route::get('/uploaded-item-reciept', fn() => view('client.uploaded-item-reciept'))->name('uploaded-item-reciept');
Route::get('/uploaded-bill-payment', fn() => view('client.uploaded-bill-payment'))->name('uploaded-bill-payment');
Route::get('/uploaded-purchase-requisition', fn() => view('client.uploaded-purchase-requisition'))->name('uploaded-purchase-requisition');
Route::get('/uploaded-debit-note', fn() => view('client.uploaded-debit-note'))->name('uploaded-debit-note');
Route::get('/uploaded-credit-note', fn() => view('client.uploaded-credit-note'))->name('uploaded-credit-note');
Route::get('/uploaded-cheque-template', fn() => view('client.uploaded-cheque-template'))->name('uploaded-cheque-template');
Route::get('/uploaded-design-to-build', fn() => view('client.uploaded-design-to-build'))->name('uploaded-design-to-build');
Route::get('/uploaded-customer-statement', fn() => view('client.uploaded-customer-statement'))->name('uploaded-customer-statement');
Route::get('/uploaded-customer-payment', fn() => view('client.uploaded-customer-payment'))->name('uploaded-customer-payment');
Route::get('/uploaded-journal-entry', fn() => view('client.uploaded-journal-entry'))->name('uploaded-journal-entry');
Route::get('/uploaded-customer-deposit', fn() => view('client.uploaded-customer-deposit'))->name('uploaded-customer-deposit');
Route::get('/uploaded-expensive-report', fn() => view('client.uploaded-expensive-report'))->name('uploaded-expensive-report');