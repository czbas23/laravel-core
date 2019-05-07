<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('login/github', 'Auth\LoginController@redirectToGitHub');
Route::get('login/github/callback', 'Auth\LoginController@handleGitHubCallback');
Route::get('login/facebook', 'Auth\LoginController@redirectToFacebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleFacebookCallback');
Route::get('login/google', 'Auth\LoginController@redirectToGoogle');
Route::get('login/google/callback', 'Auth\LoginController@handleGoogleCallback');
Route::get('login/twitter', 'Auth\LoginController@redirectToTwitter');
Route::get('login/twitter/callback', 'Auth\LoginController@handleTwitterCallback');
Route::get('login/gitlab', 'Auth\LoginController@redirectToGitlab');
Route::get('login/gitlab/callback', 'Auth\LoginController@handleGitlabCallback');
Route::get('login/bitbucket', 'Auth\LoginController@redirectToBitbucket');
Route::get('login/bitbucket/callback', 'Auth\LoginController@handleBitbucketCallback');

Route::get('/home', 'HomeController@index')->name('home');
