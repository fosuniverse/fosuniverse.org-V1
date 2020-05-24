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
//Home Page Routes
Route::get('/', 'HomeController@index')->name('home');
Route::get('/aboutcommunity', 'HomeController@about')->name('about');
Route::get('/join-community', 'HomeController@join')->name('join');
Route::get('/events/become-member', 'HomeController@events_become_member')->name('events-become-member');
Route::get('/projects/resources', 'HomeController@projects_resources')->name('projects-resources');
