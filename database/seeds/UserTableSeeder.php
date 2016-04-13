<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Novus\User::class)->create([
            'name' => 'CARLOS CALVO',
            'email' => 'carloscalvo.au@gmail.com',
            'password' => bcrypt('654321'),
            'role' => 'admin',
        ]);
        factory(Novus\User::class, 49)->create();
    }
}
