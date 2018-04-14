<?php

use Illuminate\Database\Seeder;
use App\ItemType;

class ItemTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item_types = [
        	[
        		'name' => 'Electroménager',
	        ],
	        [
                'name' => 'Animations',
            ],
	        [
                'name' => 'Evenementiel',
            ],
        ];

        foreach ($item_types as $item_type => $values){
            ItemType::create($values);
        }

    }
}
