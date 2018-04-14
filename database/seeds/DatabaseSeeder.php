<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
        	AssociationsTableSeeder::class,
        	ItemsTableSeeder::class,
        	ItemTypesTableSeeder::class,
        	UsersTableSeeder::class,
        	BookingsTableSeeder::class,
        	BookingLinesTableSeeder::class,
        ]);
    }
}
