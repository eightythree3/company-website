<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();
Route::get("/admin/login" , "Auth\LoginController@showAdminLoginForm")->name("admin-login-get");
Route::post("/admin/login" , "Auth\LoginController@adminLogin")->name("admin-login-post");
Route::get("/admin/logout", "Auth\LoginController@adminLogout")->name("admin-logout");
Route::group(["middleware" => "admin-auth"] , function (){
    Route::get("/admin", "AdminController@dashboard")->name("admin");

    app()->setLocale("ar");
    Route::get("/admin/pages", "AdminController@pages")->name("admin.pages.index");
    Route::get("/admin/pages/create", "AdminController@pageCreate")->name("pages.create");
    Route::post("/admin/pages/create", "AdminController@pageCreate")->name("admin.pages.store");
    Route::get("/admin/pages/update/{id}", "AdminController@pageUpdate")->name("admin.pages.update");
    Route::post("/admin/pages/update/{id}", "AdminController@pageUpdate")->name("admin.pages.update");
    Route::get("/admin/pages/delete/{id}", "AdminController@pageDelete")->name("admin.pages.delete");
    Route::get("/admin/members", "AdminController@members")->name("members");
    Route::get("/admin/members/create", "AdminController@memberCreate")->name("members.create");
    Route::post("/admin/members/store", "AdminController@memberCreate")->name("members.store");
    Route::get("/admin/members/edit/{id}", "AdminController@memberEdit")->name("members.edit");
    Route::post("/admin/members/update/{id}", "AdminController@memberEdit")->name("members.update");
    Route::get("/admin/members/delete/{id}", "AdminController@memberDelete")->name("members.delete");
    Route::get("/admin/settings", "AdminController@settings")->name("settings");
    Route::post("/admin/settings/update", "AdminController@settings")->name("settings.update");

    Route::get("/admin/articles", "AdminController@articles")->name("articles");
    Route::get("/admin/articles/create", "AdminController@articlesCreate")->name("articles.create");
    Route::post("/admin/articles/store", "AdminController@articlesCreate")->name("articles.store");
    Route::get("/admin/articles/edit/{id}", "AdminController@articlesEdit")->name("articles.edit");
    Route::post("/admin/articles/update/{id}", "AdminController@articlesEdit")->name("members.update");
    Route::get("/admin/articles/delete/{id}", "AdminController@articleDelete")->name("articles.delete");
    Route::get("/admin/articles/comments", "AdminController@articlesComments")->name("articles.comments");
    Route::get("/admin/article/comment/verify/{id}", "AdminController@articleVerifyComment")->name("articles.comments.verify");
    Route::get("/admin/article/comment/delete/{id}", "AdminController@articleCommentDelete")->name("articles.delete");

});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ar', function () {

    return view('welcome');
});


Route::get('/{any}', function () {
    return view('welcome');
})->where("any" , ".*");




