<?php

use App\user;

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
});

// Route::get('/login', function () {
//     return view('auth.login');
// });

Route::get('/staff', function () {
    return view('staff.home');
});

Route::get('/studentCouncil', function () {
    return view('staff.studentCouncil');
});

Route::get('/headOfActivity', function () {
    return view('staff.headOfActivity');
});

Route::get('/headOfAffairs', function () {
    return view('staff.headOfAffairs');
});

Route::get('/presidentForStudent', function () {
    return view('staff.presidentForStudent');
});

Route::get('/presidentForAcademic', function () {
    return view('staff.presidentForAcademic');
});

Route::post('/addPresidentForAcademic/add', 'StaffController@insert');


Route::get('/login2', function () {
    return view('auth.login2');
});



Route::get('/student_lay', function () {
    return view('staff.stley');
});

Route::get('/approve', function () {
    return view('president.president');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware'=>'adminMiddleware'], function () {
//Finish

//StudentUnion
Route::get('/studentUnion', 'StudentUnionController@index');
Route::get('/addStudentUnion', 'StudentUnionController@create');
Route::post('/addStudentUnion', 'StudentUnionController@insert');

Route::get('/editStudentUnion_{id}', 'StudentUnionController@edit');
Route::post('/studentUnion/update/{id}', 'StudentUnionController@update');

Route::get('/studentUnion/delete/{id}', 'StudentUnionController@destroy');
//-------------------------------------------------------------------------

//StudentCouncil
Route::get('/studentCouncil', 'StudentCouncilController@index');
Route::get('/addStudentCouncil', 'StudentCouncilController@create');
Route::post('/addStudentCouncil', 'StudentCouncilController@insert');

Route::get('/editStudentCouncil_{id}', 'StudentCouncilController@edit');
Route::post('/studentCouncil/update/{id}', 'StudentCouncilController@update');

Route::get('/studentCouncil/delete/{id}', 'StudentCouncilController@destroy');
//-------------------------------------------------------------------------

//Member
Route::get('/Member', 'MemberController@index');
Route::get('/addMember', 'MemberController@create');
Route::post('/addMember', 'MemberController@insert');

Route::get('/editMember{id}', 'MemberController@edit');
Route::post('/Member/update/{id}', 'MemberController@update');

Route::get('/Member/delete/{id}', 'MemberController@destroy');
//-------------------------------------------------------------------------

//Head of Student Activity Section Information

Route::get('/headOfActivity', 'HeadActivityController@index');
Route::get('/addHeadOfStudentActivity', 'HeadActivityController@create');
Route::post('/addHeadOfStudentActivity', 'HeadActivityController@insert');

Route::get('/editHeadOfStudentActivity_{id}', 'HeadActivityController@edit');
Route::post('/headOfActivity/update/{id}', 'HeadActivityController@update');

Route::get('/headOfActivity/delete/{id}', 'HeadActivityController@destroy');
//-------------------------------------------------------------------------

//Head of Student Affairs Division Information
Route::get('/headOfAffairs', 'HeadAffairsController@index');
Route::get('/addHeadOfStudentAffairs', 'HeadAffairsController@create');
Route::post('/addHeadOfStudentAffairs', 'HeadAffairsController@insert');

Route::get('/editHeadOfStudentAffairs_{id}', 'HeadAffairsController@edit');
Route::post('/headOfAffairs/update/{id}', 'HeadAffairsController@update');

Route::get('/headOfAffairs/delete/{id}', 'HeadAffairsController@destroy');
//-------------------------------------------------------------------------****

//Assistant to the President for Student Development
Route::get('/presidentForStudent', 'AssistantPresidentController@index');

Route::get('/addPresidentForStudent', 'AssistantPresidentController@create');
Route::post('/addPresidentForStudent', 'AssistantPresidentController@insert');

Route::get('/editPresidentForStudent_{id}', 'AssistantPresidentController@edit');
Route::post('/presidentForStudent/update/{id}', 'AssistantPresidentController@update');

Route::get('/presidentForStudent/delete/{id}', 'AssistantPresidentController@destroy');

//-------------------------------------------------------------------------

//Vice President for Academic Affairs for Phuket Campus
Route::get('/presidentForAcademic', 'VicePresidentController@index');

Route::get('/addPresidentForAcademic', 'VicePresidentController@create');
Route::post('/addPresidentForAcademic', 'VicePresidentController@insert');

Route::get('/editPresidentForAcademic_{id}', 'VicePresidentController@edit');
Route::post('/presidentForAcademic/update/{id}', 'VicePresidentController@update');

Route::get('/presidentForAcademic/delete/{id}', 'VicePresidentController@destroy');
//-------------------------------------------------------------------------

//Organization
Route::get('/organizeation', 'OrganizationController@index');

Route::get('/addOrganization', 'OrganizationController@create');
Route::post('/addOrganization', 'OrganizationController@insert');

Route::get('/editOrganization_{id}', 'OrganizationController@edit');
Route::post('/organizeation/update/{id}', 'OrganizationController@update');

Route::get('/organizeation/delete/{id}', 'OrganizationController@destroy');
//-------------------------------------------------------------------------

});

Route::resource('document','DocumentController');
Route::delete('document/delete/{id}','DocumentController@destroy');