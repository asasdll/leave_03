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

Route::get('/', function () {
    return view('auth.login');
}); //tset git

Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('auth');

Route::get('table', 'NewcompaniesController@table')->middleware('admin');
Route::get('leave_hr', 'NewcompaniesController@leave_hr')->middleware('admin');
Route::get('record', 'NewcompaniesController@record')->middleware('admin');
Route::post('search_leaves', 'NewcompaniesController@search_leaves')->middleware('admin');
Route::post('search_time', 'NewcompaniesController@search_time')->middleware('admin');
Route::resource('usersprofile', 'PhotoController')->middleware('admin');
Route::get('mac', 'AddmacController@mac')->middleware('auth');
Route::resource('newmac', 'AddmacController')->middleware('admin');
Route::resource('newcompany', 'NewcompaniesController')->middleware('admin');
Route::resource('AAA', 'PositionController')->middleware('admin');
Route::get('pos', 'PositionController@pos')->middleware('admin');
Route::resource('posup', 'PositionsupsController')->middleware('admin');
Route::resource('l_hr', 'Leave_hrController')->middleware('admin');
//Route::post('up_hr/{id}', 'Leave_hrController@update')->middleware('admin');
Route::post('up_no', 'Leave_hrController@update_no')->middleware('admin');
//--------------------------------------------------------//


//------Route:: chief::Folder------ //
Route::get('VH', 'MemberuserController@index')->middleware('auth');
Route::get('recordch', 'MemberuserController@record')->middleware('auth');
Route::resource('letter', 'LeaveController')->middleware('auth');
Route::resource('timestampch', 'TimesController')->middleware('auth');
Route::resource('down', 'TimesController')->middleware('auth');
Route::resource('l_chief', 'Leave_chiefController')->middleware('auth');
//--------------------------------------------------------//

//--------------------------------------------------------//
//--------------member-chief-personnel------------------//
Route::resource('member', 'MemberuserController')->middleware('auth');


//--------------member--personnel------------------//
Route::get('tablepe', 'MemberuserController@tablepe')->middleware('auth');
Route::get('search_time_user', 'MemberuserController@search_time_user')->middleware('auth');
Route::get('search_time_chief', 'MemberuserController@search_time_chief')->middleware('auth');
Route::get('record2', 'MemberuserController@record2')->middleware('auth');
Route::get('leave2', 'MemberuserController@leave2')->middleware('auth');
Route::get('leave3', 'MemberuserController@leave3')->middleware('auth');

Route::get('search', 'PositionController@search')->middleware('admin');  //ค้าหา พนักงาน

Route::get('pdf/{id}', 'TimesController@new_pdf')->middleware('admin');
Route::get('pdf_leave/{id}', 'LeaveController@pdf_leave')->middleware('admin');