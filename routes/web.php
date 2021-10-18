<?php

use App\Http\Controllers\Admin\AuditLogController;
use App\Http\Controllers\Admin\ConnectionController;
use App\Http\Controllers\Admin\CrmCustomerController;
use App\Http\Controllers\Admin\CrmDocumentController;
use App\Http\Controllers\Admin\CrmNoteController;
use App\Http\Controllers\Admin\CrmStatusController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PlaidTransactionController;
use App\Http\Controllers\Admin\QboReportController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\UserProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Permissions
    Route::resource('permissions', PermissionController::class, ['except' => ['store', 'update', 'destroy']]);

    // Roles
    Route::resource('roles', RoleController::class, ['except' => ['store', 'update', 'destroy']]);

    // Users
    Route::resource('users', UserController::class, ['except' => ['store', 'update', 'destroy']]);

    // Audit Logs
    Route::resource('audit-logs', AuditLogController::class, ['except' => ['store', 'update', 'destroy', 'create', 'edit']]);

    // Crm Status
    Route::post('crm-statuses/csv', [CrmStatusController::class, 'csvStore'])->name('crm-statuses.csv.store');
    Route::put('crm-statuses/csv', [CrmStatusController::class, 'csvUpdate'])->name('crm-statuses.csv.update');
    Route::resource('crm-statuses', CrmStatusController::class, ['except' => ['store', 'update', 'destroy']]);

    // Crm Customer
    Route::post('crm-customers/csv', [CrmCustomerController::class, 'csvStore'])->name('crm-customers.csv.store');
    Route::put('crm-customers/csv', [CrmCustomerController::class, 'csvUpdate'])->name('crm-customers.csv.update');
    Route::resource('crm-customers', CrmCustomerController::class, ['except' => ['store', 'update', 'destroy']]);

    // Crm Note
    Route::resource('crm-notes', CrmNoteController::class, ['except' => ['store', 'update', 'destroy']]);

    // Crm Document
    Route::post('crm-documents/media', [CrmDocumentController::class, 'storeMedia'])->name('crm-documents.storeMedia');
    Route::post('crm-documents/csv', [CrmDocumentController::class, 'csvStore'])->name('crm-documents.csv.store');
    Route::put('crm-documents/csv', [CrmDocumentController::class, 'csvUpdate'])->name('crm-documents.csv.update');
    Route::resource('crm-documents', CrmDocumentController::class, ['except' => ['store', 'update', 'destroy']]);

    // Connections
    Route::resource('connections', ConnectionController::class, ['except' => ['store', 'update', 'destroy']]);

    // Qbo Reports
    Route::resource('qbo-reports', QboReportController::class, ['except' => ['store', 'update', 'destroy']]);

    // Plaid Transactions
    Route::resource('plaid-transactions', PlaidTransactionController::class, ['except' => ['store', 'update', 'destroy']]);
});

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'middleware' => ['auth']], function () {
    if (file_exists(app_path('Http/Controllers/Auth/UserProfileController.php'))) {
        Route::get('/', [UserProfileController::class, 'show'])->name('show');
    }
});
