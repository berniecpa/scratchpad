<?php

use App\Http\Controllers\Api\V1\Admin\CrmCustomerApiController;
use App\Http\Controllers\Api\V1\Admin\CrmDocumentApiController;
use App\Http\Controllers\Api\V1\Admin\CrmStatusApiController;

Route::group(['prefix' => 'v1', 'as' => 'api.', 'middleware' => ['auth:sanctum']], function () {
    // Crm Status
    Route::apiResource('crm-statuses', CrmStatusApiController::class);

    // Crm Customer
    Route::apiResource('crm-customers', CrmCustomerApiController::class);

    // Crm Document
    Route::post('crm-documents/media', [CrmDocumentApiController::class, 'storeMedia'])->name('crm_documents.store_media');
    Route::apiResource('crm-documents', CrmDocumentApiController::class);
});
