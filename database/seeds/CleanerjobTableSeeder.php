<?php

use Illuminate\Database\Seeder;

class CleanerjobTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Novus\Cleanerjob::class, 40)->create();
    }
}
