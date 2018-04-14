<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemType extends Model
{
    protected $fillable = [
		'name',
	];
	protected $table = 'item_types';
}
