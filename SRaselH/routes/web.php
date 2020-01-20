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

/*Route::get('/', function () {
    return view('welcome');
});   */
//Route::get('/','HomeController@displayWelcome');
Route::get('/', function () {
    //return view('auth.login');
    if (auth()->guest()) {
        return redirect('/adminUser');
    }
    else{
        return redirect('/');
    }
});

Route::get('/login', function () {
   return view('auth.login');
});

Route::get('/', 'WelcomeController@displayWelcome');


Route::get('/adminUser', 'SharingController@displayWelcomeUser');





Route::get('logout','LogoutController@displayLogout');




//    report Add, Edit, Delete

Route::get('reports/add','ReportController@addReport');
Route::get('reports/edit','ReportController@editReport');
Route::get('reports/delete','ReportController@deleteReport');
Route::post('reports/save','ReportController@saveReport');







//users
Route::group(['middleware' => 'customAuth'], function(){

     // admin details
    //Route::get('logout','LogoutController@displayLogout');



    //export-import

    Route::get('ex-import', 'ExportImportController@getIndex');
    Route::get('ex-import/export', 'ExportImportController@getExport');
    Route::post('ex-import/import', 'ExportImportController@postImport');













//    userdetails    list with search

    Route::post('userDetails/search', 'UserController@listUserDetailsSearch');
    Route::get('userDetails/search', 'UserController@listUserDetailsSearch');




    Route::get('uDetails','UserController@listUserDetails');
    Route::get('userDetails/add','UserController@addUserDetails');
    Route::get('userDetails/edit','UserController@editUserDetails');
    Route::get('userDetails/delete','UserController@deleteUserDetails');
    Route::post('userDetails/save','UserController@saveUserDetails');

    Route::get('users','UserController@listUser');
    Route::get('users/add','UserController@addUser');
    Route::get('users/edit','UserController@editUser');
    Route::get('users/delete','UserController@deleteUser');
    Route::post('users/save','UserController@saveUser');

    //    Notice list Add, Edit, Delete

    Route::get('notices/add','NoticeController@addNotice');
    Route::get('notices/edit','NoticeController@editNotice');
    Route::get('notices/delete','NoticeController@deleteNotice');
    Route::post('notices/save','NoticeController@saveNotice');





    //    reportList

    Route::get('reports','ReportController@listReport');
//    reportList with search

    Route::post('reports/search', 'ReportController@listReportSearch');
    Route::get('reports/search', 'ReportController@listReportSearch');




//    userlist with search

    Route::post('users/search', 'UserController@listUserSearch');
    Route::get('users/search', 'UserController@listUserSearch');


    //Ashish meal routes
    //Ashish meal admin token
    Route::get('turn_on_token_sell','MealController@turn_on_token_sell');
    Route::get('turn_off_token_sell','MealController@turn_off_token_sell');
    Route::post('/token_list','MealController@token_list');
    Route::get('/update_meal_cost',function (){
        $token_sell_option=App\token_sell::find(1);
        $userId = Auth::user()->id;
        $data1['userTable'] = DB::table('users')
            ->where('users.id', '=', $userId)
            ->first();
        return view('update_meal_cost',['token_sell_option'=>$token_sell_option],$data1);
    });
    Route::get('/set_token_date','MealController@set_token_date');
    Route::post('/set_meal_cost','MealController@set_meal_cost');


});

//notice list

Route::get('notices','NoticeController@listNotice');

// profiles


Route::get('passwordChange','ProfileController@changePassword');
Route::post('passwordSave','ProfileController@savePassword');




Route::get('profileDisplay','ProfileController@displayProfile');
Route::get('particularProfile','ProfileController@displayParticularProfile');


Auth::routes();
//Auth::routes(['register']);
//Auth::routes(['login']);

Route::post('studentLogin','StudentController@loginStudent');
Route::get('sRegister','StudentController@registerStudent');

Route::get('/home', 'HomeController@index')->name('home');


//for buy meal
//all the routes are accessible for log in users either he admin or not; its a problem;
//Ashish meal admin token
Route::get('buy_meal','MealController@index')->middleware('auth');
Route::get('download-file-{id}','WelcomeController@downloadFile')->name('downLoadFile');

Route::post('request_for_token','MealController@request_for_token')->middleware('auth');
