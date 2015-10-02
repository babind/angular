<?php 
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('posts','PostsController');
Route::resource('categories', 'CategoriesController');

App::bind('Acme\Billing\BillingInterface','Acme\Billing\StripeBilling');
Route::get('buy',function()
{
	return view('buy');
});

Route::post('buy',function()
{
	$billing = App::make('Acme\Billing\BillingInterface');
 return 	$billing->charge([
		'email'=>Input::get('email'),
		'token'=>Input::get('token')
		]);
});