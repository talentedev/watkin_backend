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

Route::group(['middleware' => 'web'], function () {

    Auth::routes();

    Route::get('/', 'HomeController@index')->name('home');

    Route::namespace('Admin')->group( function () {

        // Dashboard
        Route::get('dashboard', 'DashboardController@index');
        
        // Upcoming Tasks
        Route::prefix('upcoming')->group(function () {
            Route::get('/', 'UpcomingTaskController@index');
            Route::delete('/delete/{id}', 'UpcomingTaskController@deleteTask');
            Route::post('/delete-all', 'UpcomingTaskController@deleteTasks');
        });

        // Completed Tasks
        Route::get('completed', 'CompletedTaskController@index');

        // Assigned Tasks
        Route::get('assigned', 'AssignedTaskController@index');

    });

});