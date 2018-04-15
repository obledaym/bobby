<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
		'name','description', 'quantity','place','status','caution','type','association',
	];
	protected $table = 'items';

	public function association()
	{
		return $this->belongsTo('App\Association');
	}

	public function itemtype()
	{
		return $this->belongsTo('App\ItemType');
	}
}
