<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
		'name','description', 'quantity','place','status','caution','type','association',
	];

	protected $table = 'items';

}



