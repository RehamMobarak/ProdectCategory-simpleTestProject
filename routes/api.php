<?php

use App\Http\Controllers\Api\PassportAuthController;
use App\Http\Controllers\Api\CategoryApiController;
use App\Http\Controllers\Api\ProductApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Product
Route::resource('products', ProductApiController::class);

//Category
Route::resource('categories', CategoryApiController::class);


//Passport Auth
 
Route::post('register', [PassportAuthController::class, 'register']);
Route::post('login', [PassportAuthController::class, 'login']);

// put all api protected routes here
Route::middleware('auth:api')->group(function () {
    Route::post('user-details', [PassportAuthController::class, 'userDetails']);
    Route::post('logout', [PassportAuthController::class, 'logout']);


    //Product
    Route::resource('products', ProductApiController::class, ['except' => ['index', 'show']]);

    //Category
    Route::resource('categories', CategoryApiController::class, ['except' => ['index', 'show']]);
});


