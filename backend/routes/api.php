<?php

use App\Http\Controllers\DetailController;
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
// Route::prefix('auth')->group(function () {
//   Route::get('twitter', [AuthController::class,'login']);
//   Route::get('twitter/callback', [AuthController::class,'callback']);
// });
// Auth::routes();
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/user_detail/create/{}', [DetailController::class,'create']);
