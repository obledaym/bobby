<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    protected $fillable = [
		'name','parent_id', 'mail',
	];

	protected $table = 'associations';
}
