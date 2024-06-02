<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\JobOfferController;
use App\Http\Controllers\JobOpportunityController;
use App\Http\Controllers\OpportunityController;
use App\Http\Controllers\OpportunityRequest2Controller;
use App\Http\Controllers\OpportunityRequest3Controller;
use App\Http\Controllers\OpportunityRequestController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\WorkOfferController;
use App\Http\Controllers\WorkOppotunityController;
use App\Models\Work;
use App\Models\WorkOffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('/customer',CustomerController::class);
Route::apiResource('/job',JobController::class);
// Route::apiResource('/work',WorkOfferController::class);
// Route::apiResource('/jobsop',JobOpportunityController::class);
Route::apiResource('/opportunity',OpportunityController::class);
Route::apiResource( '/request' , OpportunityRequest2Controller::class );
