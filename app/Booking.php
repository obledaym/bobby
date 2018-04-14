<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
		'owner','booker', 'user', 'cautionReceived', 'caution'
	];

	protected $table = 'bookings';
}
