<?php

use Illuminate\Database\Seeder;

class PlaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Novus\Place::class)->create([
            'client_id' => '1',
            'unit_number' => '1210',
            'street_number' => '601',
            'street_name' => 'LITTLE COLLINS',
            'street_type_id' => '1',
            'suburb' => 'MELBOURNE',
            'state_id' => '6',
            'postcode' => '3000',
            'reference' => null,
            'status' => true,
            'verified' => true,
            'latitude' => '-37.81787121',
            'longitude' => '144.95484699',
            'cleaner_id' => '1',
            'no_jobs' => '2',
            'created_at' => '2016-03-16 00:00:00',
            'updated_at' => '2016-03-16 00:00:00',
        ]);
        factory(Novus\Place::class, 72)->create();
    }
}
