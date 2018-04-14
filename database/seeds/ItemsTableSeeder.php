<?php

use Illuminate\Database\Seeder;
use App\Item;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
        	[
        		'name' => 'barnum',
        		'parent_id'	=>	null,
        		'mail'	=>	'integutc@gmail.com',
                'name' => 'Integration UTC',
                'name' => 'Integration UTC',
                'name' => 'Integration UTC',
                'name' => 'Integration UTC',
                'name' => 'Integration UTC',
	        ],
	        [
        		'name' => 'BDE',
        		'parent_id'	=>	null,
        		'mail'	=>	'bdeutc@gmail.com',
	        ],
	        [
        		'name' => 'Imaginarium Festival',
        		'parent_id'	=>	null,
        		'mail'	=>	'if@gmail.com',
	        ],
        ];

        foreach ($associations as $association => $values){
            Association::create($values);
        }

    }
}
