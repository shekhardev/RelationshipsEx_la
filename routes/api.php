<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'api'], function() {
    Route::get('articles', 'ArticlesController@index');
});

Route::post('/quote',[
	'uses' => 'QuoteController@postQuote' 
]);
Route::get('/quotes',[
	'uses' => 'QuoteController@getQuotes'
]);
Route::put('/quote/{id}',[
	'uses' => 'QuoteController@putQuotes'
]);
Route::delete('/quotes',[
	'uses' => 'QuoteController@deleteQuotes'
]);

