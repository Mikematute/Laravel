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

	$tasks = [
		'Plan using laravel',
		'Fire Juan',
		'Make Miguel new governor of the world'

	];

    return view('welcome', compact('tasks'));
});

Route::get('test', function () {

	$tasks = DB::table('tasks')->get();

	// return $tasks;
    return view('test', compact('tasks'));
});