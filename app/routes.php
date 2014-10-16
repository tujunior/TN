<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//*************** Run all models*************************
/*
|--------------------------------------------------------------------------
|  Get Route call function
|--------------------------------------------------------------------------
*/

//resume::observe(new ResumeObserver);
Route::get('/create',function(){
    $user = new Resume;
    $user->FirstName ='Testnew';
    $user->LastName= 'testtest';
    $user->save();
});
Route::get('/test1',function(){
    echo testpack::greeting();
	//return 'hello world';
	
});
/*
|--------------------------------------------------------------------------
|  Get Route call controller
|--------------------------------------------------------------------------
*/
Route::get('/test', 'ResumeController@index');

Route::get('/connect','ConnectController@index');
Route::get('/elase','UserController@showProfile');

/*
|--------------------------------------------------------------------------
|  Get Route & parameter 
|--------------------------------------------------------------------------
*/
Route::get('user1/{id}', function($id)
{
    return 'User '.$id;
});
/*
|--------------------------------------------------------------------------
|  Get Route & parameter. If don't have parameter,will return null or John
|--------------------------------------------------------------------------
*/
Route::get('user2/{name?}', function($name = null)
{
    return $name;
});

Route::get('user3/{name?}', function($name = 'John')
{
    return $name;
});

/*
|--------------------------------------------------------------------------
|  Get Route & parameter only charactor. If don't char will error 
|--------------------------------------------------------------------------
*/
Route::get('user4/{name}', function($name)
{
    return $name;
})
->where('name', '[A-Za-z]+');

     // ----- or -----------

Route::pattern('id', '[A-Za-z]+');

Route::get('user4/{id}', function($id)
{
    // Only called if {id} is charac.
});


Route::filter('foo', function()
{
    if (Route::input('id') == 1)
    {
        //
    }
});
