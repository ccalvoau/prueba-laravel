<?php

use Illuminate\Database\Seeder;
use Novus\Client;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Client::class, 56)->create();
    }
}
