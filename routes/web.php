<?php
use App\Models\Users;
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

// Example Routes
Route::view('/', 'landing');
Route::match(['get', 'post'], '/dashboard', function(){
    return view('dashboard');
});
Route::view('/examples/plugin', 'examples.plugin');
Route::view('/examples/blank', 'examples.blank')->name('test');


/**
 * 
 * Cases
 * Last Update : 2019-09-17 10:42
 * By Prasong.put
 * 
*/
// Auth::routes();

 Route::group(['middleware'=>'chkuser'], function (){
    Route::resource('/cases','Cases\CasesController');
 });

 Route::get('/login','Auth\LoginController@showLoginForm')->name('login');
  
//--Route::get('getCaseList','MainController@getCaselist');


// Route::any('search','MainController@searchCaselist');
// Route::get('createticket','CaseController@viewCreateTicket')->name('createticket');//view
// Route::any('showtaglist','CaseController@showtaglist');

// Route::get('showinfoticket','CaseController@showinfoticket');
// Route::get('showinfoexcutor','CaseController@showinfoexcutor');
// Route::get('showaddittioninfo','CaseController@showaddittioninfo');
// Route::any('createcase','CaseController@createCase');//create
// Route::get('case/{id}','CaseController@showcase');
