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
 /*-----------------------------------------------------------------------------------------------------------------------------*/
Route::get('/admin','Controller@admin');
Route::get('/delete','Controller@destroy');
Route::post('/create','Controller@insert');
Route::get('/adminupdate','Controller@adminupdate');
Route::post('edit/{UserId}','Controller@edit');
 /*-----------------------------------------------------------------------------------------------------------------------------*/
Route::get('/edu','Controller@edu');
Route::get('/edudestroy/{EduId}','Controller@edudestroy');
Route::post('/educreate','Controller@eduinsert');
Route::get('eduupdate/{EduId}','Controller@eduupdate');
Route::post('eduedit/{EduId}','Controller@eduedit');
 /*-----------------------------------------------------------------------------------------------------------------------------*/
Route::get('/prices','Controller@prices');
Route::get('/pricesdestroy/{ServiceId}','Controller@pricesdestroy');
Route::post('/pricescreate','Controller@pricesinsert');
Route::get('pricesupdate/{ServiceId}','Controller@pricesupdate');
Route::post('pricesedit/{ServiceId}','Controller@pricesedit');
 /*-----------------------------------------------------------------------------------------------------------------------------*/
Route::get('/Home','Controller@Home');
Route::post('/login','Controller@Login');
Route::post('/signup','Controller@SignUp');
 /*-----------------------------------------------------------------------------------------------------------------------------*/
 Route::post('/usercreate','Controller@userinsert');
Route::get('/index','Controller@index');
/*-----------------------------------------------------------------------------------------------------------------------------*/
Route::get('/portfolio','Controller@portfolio');
Route::get('portfolioupdate/{ProjectId}','Controller@portfolioupdate');
Route::post('portfolioedit/{ProjectId}','Controller@portfolioedit');
Route::get('/portfoliodestroy/{ProjectId}','Controller@portfoliodestroy');
Route::post('/portfoliocreate','Controller@portfolioinsert');
/*-----------------------------------------------------------------------------------------------------------------------------*/

 /*-----------------------------------------------------------------------------------------------------------------------------*/
Route::get('/skills','Controller@skills');
Route::get('/skillsdestroy/{SkillId}','Controller@skillsdestroy');
Route::post('/skillscreate','Controller@skillsinsert');
Route::get('skillsupdate/{SkillId}','Controller@skillsupdate'); 
Route::post('skillsedit/{SkillId}','Controller@skillsedit');
 /*-----------------------------------------------------------------------------------------------------------------------------*/
Route::get('/user','Controller@user');
/*----------------------------------------------------------------------------------------------------------------------------- */
Route::get('/workexp','Controller@workexp');
Route::get('/workdestroy/{WorkId}','Controller@workdestroy');
Route::post('/workcreate','Controller@workinsert');
Route::get('workupdate/{WorkId}','Controller@workupdate');
Route::post('workedit/{WorkId}','Controller@workedit');
 /*-----------------------------------------------------------------------------------------------------------------------------*/
Route::get('/main','Controller@main');
Route::get('/maindelete','Controller@maindestroy');
Route::post('/maincreate','Controller@maininsert');
Route::get('/mainupdate','Controller@mainupdate');
Route::post('mainedit/{UserId}','Controller@mainedit');
Route::post('/uploadfile','Controller@showUploadFile');
 /*-----------------------------------------------------------------------------------------------------------------------------*/