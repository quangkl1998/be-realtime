<?php

use App\Events\MessageEvent;
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

Route::post('new-message', function (Request $request) {
    event(new MessageEvent($request->user, $request->message));
    return 'ok';
});

Route::get('/a', function () {
    return "1";
});
