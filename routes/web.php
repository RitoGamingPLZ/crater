<?php

// use Crater\Http\Controllers\V1\Auth\LoginController;
// use Crater\Http\Controllers\V1\Estimate\EstimatePdfController;
// use Crater\Http\Controllers\V1\Expense\DownloadReceiptController;
// use Crater\Http\Controllers\V1\Invoice\InvoicePdfController;
// use Crater\Http\Controllers\V1\Mobile\Customer\EstimatePdfController as CustomerEstimatePdfController;
// use Crater\Http\Controllers\V1\Mobile\Customer\InvoicePdfController as CustomerInvoicePdfController;
// use Crater\Http\Controllers\V1\Payment\PaymentPdfController;
// use Crater\Http\Controllers\V1\Report\CustomerSalesReportController;
// use Crater\Http\Controllers\V1\Report\ExpensesReportController;
// use Crater\Http\Controllers\V1\Report\ItemSalesReportController;
// use Crater\Http\Controllers\V1\Report\ProfitLossReportController;
// use Crater\Http\Controllers\V1\Report\TaxSummaryReportController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
|
*/
Route::middleware([
    'web',
])->group(function () {
    Route::get('/', function () {
        return 'this is the central app of crater';
    });
});
