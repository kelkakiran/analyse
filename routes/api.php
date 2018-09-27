<?php

use Illuminate\Http\Request;
use App\TechnicalSkills;

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

Route::get('/skills', function () {
    return response()->json([
        'results' => TechnicalSkills::select(['id', 'name'])->get(),
        "pagination" => [
            "more" => false
        ]
    ]);
});
