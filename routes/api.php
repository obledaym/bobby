<?php

use Illuminate\Http\Request;
use App\User;
use App\ItemType;
use App\Item;
use Illuminate\Support\Str;
use App\Booking;

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

    Route::get('items/itemtypes/{type}', function($type_id){

    	$name = ItemType::find($type_id)->items()->pluck('name');
    	$description = ItemType::find($type_id)->items()->pluck('description');
    	$quantity = ItemType::find($type_id)->items()->pluck('quantity');
    	$place = ItemType::find($type_id)->items()->pluck('place');
    	$status = ItemType::find($type_id)->items()->pluck('status');
    	$caution = ItemType::find($type_id)->items()->pluck('caution');
    	
    	$items = [];

    	for ($i=0; $i< count($name); $i++)
    	{
		array_push($items, ['name' => $name[$i], 'description' => $description[$i], 'quantity' => $quantity[$i], 'place' => $place[$i], 'status' => $status[$i], 'caution' => $caution[$i]]);
    	};
    	

    	return json_encode($items);

    });

    /*Route::get('bookinglines/booking/{booking}', function($booking_id){
    	return $bookings = Booking::find($booking_id)->bookinglines();
    });*/
});