<?php

use Illuminate\Http\Request;
use App\User;
use App\ItemType;
use App\Item;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('v1')->group(function () {
	Route::apiResources([
			'associations'		=> 'AssociationController',
			'bookings'	=> 'BookingController',
			'users'			=> 'UserController',
			'bookinglines'			=> 'BookingLineController',
			'items'			=> 'ItemController',
			'itemtypes'		=> 'ItemTypeController',
			'assousers'		=>	'AssoUserController',
	]);
	
	Route::get('assousers/users/{user}', function ($user_id) {
    	return $assos = User::find($user_id)->associations()->pluck('name');
    });

    Route::get('items/itemtypes/{id}', function($id){
    	return $items = ItemType::find($id)->items()->pluck('name');

    });
});