<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingLine extends Model
{
    protected $fillable = [
		'booking','item', 'quantity', 'date', 'status'
	];

	protected $table = 'booking_lines';
}
