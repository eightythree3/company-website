<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/services', "api\ComponentsControllerApi@services");
Route::get('/sections', "api\ComponentsControllerApi@sections");
Route::get('/settings', "api\ComponentsControllerApi@settings");
Route::post('/contact', "api\ComponentsControllerApi@contactRequest");
Route::get('/articles', "api\ComponentsControllerApi@articles");
Route::get('/article/details/{id}', "api\ComponentsControllerApi@articleDetails");
Route::get('/articles/related/{id}', "api\ComponentsControllerApi@articlesRelated");
Route::post('/articles/comment/{id}', "api\ComponentsControllerApi@articlesComment");
Route::get('/article/comments/{id}', "api\ComponentsControllerApi@articleComments");
