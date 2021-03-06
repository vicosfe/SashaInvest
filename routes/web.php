<?php
use Mcamara\LaravelLocalization\LaravelLocalization;
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
$localization = new LaravelLocalization();
Route::get('/parseMkala', 'ParserController@index');
Route::group(['prefix' => $localization->setLocale()], function()
{
    Route::get('/news', 'NewsController@index');
    Route::get('/newsJson', 'NewsController@getNewItems');
    Route::get('/news/{id?}', 'NewsController@getItem');
    Route::get('/logistika', function () {
        return view('logistika');
    });
    Route::get('/investment_project', function () {
        return view('investment_project');
    });
Route::get('/support', function () {
    return view('support');
});
Route::get('/investment_offers', function () {
    return view('investment_offers');
});
    Route::get('/', "IndexController@index");
});
Route::get('/directCommunication', function () {
    return view('directCommunication');
});
