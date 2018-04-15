<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    protected $fillable = [
		'name','parent_id', 'mail',
	];

	protected $table = 'associations';

	public function user()
	{
		return $this->belongsToMany('App\User', 'asso_users');
	}

	public function item()
	{
		return $this->hasMany('App\Item');
	}
}
