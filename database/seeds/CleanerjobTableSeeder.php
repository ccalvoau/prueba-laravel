<?php

use Illuminate\Database\Seeder;

class CleanerJobTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Novus\CleanerJob::class, 40)->create();
    }
}

