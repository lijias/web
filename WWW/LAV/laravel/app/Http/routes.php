<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//路由参数
/*Route::get('user/{id}/{name?}',function($id,$name='sean')
{
	return 'User-id-'.$id.'name-'.$name;
})->where(['id'=>'[0-9]+','name'=>'[a-zA-Z]+']);

//路由别名
Route::get('user/center',['as'=>'cen',function()
{
	return route('cen');
}]);

//路由群组
Route::group(['prefix'=>'c'],function()
{
	Route::get('user/center',['as'=>'cen',function()
	{
		return route('cen');
	}]);
	Route::get('user/{id}/{name?}',function($id,$name='sean')
	{
		return 'User-cd-'.$id.'bbname-'.$name;
	})->where(['id'=>'[0-9]+','name'=>'[a-zA-Z]+']);
});

//路由中输出视图
Route::get('v',function()
{
	return view('welcome');
});

//Route::get('mem/info','MemController@info');

//Route::get('mem/info',['uses'=>'MemController@info']);*/

Route::any('mem/{id}',
	[
		'uses'=>'MemController@info',
		'as'=>'m'
	])->where('id','[0-9]+');
	
Route::any('test',['uses'=>'StudentController@test']);
Route::any('q1',['uses'=>'StudentController@q1']);
Route::any('q2',['uses'=>'StudentController@q2']);
Route::any('q3',['uses'=>'StudentController@q3']);
Route::any('q4',['uses'=>'StudentController@q4']);
Route::any('q5',['uses'=>'StudentController@q5']);
Route::any('o1',['uses'=>'StudentController@o1']);
Route::any('o2',['uses'=>'StudentController@o2']);
Route::any('o3',['uses'=>'StudentController@o3']);
Route::any('o4',['uses'=>'StudentController@o4']);
Route::any('section1',['uses'=>'StudentController@section1']);
Route::any('url',['as' => 'u','uses'=>'StudentController@url']);
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
