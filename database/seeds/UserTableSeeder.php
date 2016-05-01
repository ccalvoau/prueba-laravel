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
            'cleaner_id' => '1',
            'first_name' => 'CARLOS',
            'last_name' => 'CALVO',
            'email' => 'carloscalvo.au@gmail.com',
            'validated' => true,
            'password' => bcrypt('87654321'),
            'role_id' => '1',
            'profile_picture' => 'TSx1nfEu8xDwFAPjYdSWBuzJ46x.jpg',
            'status' => true,
            'created_at' => '2016-03-16 00:00:00',
            'updated_at' => '2016-03-16 00:00:00',
        ]);
        factory(Novus\User::class)->create([
            'cleaner_id' => '2',
            'first_name' => 'VANESSA',
            'last_name' => 'FERNANDEZ',
            'email' => 'vf@gmail.com',
            'validated' => true,
            'password' => bcrypt('87654321'),
            'role_id' => '2',
            'profile_picture' => 'default.jpg',
            'status' => true,
            'created_at' => '2016-03-16 00:00:00',
            'updated_at' => '2016-03-16 00:00:00',
        ]);
        factory(Novus\User::class)->create([
            'cleaner_id' => '3',
            'first_name' => 'ROSAMARY',
            'last_name' => 'FERNANDEZ',
            'email' => 'rm@gmail.com',
            'validated' => true,
            'password' => bcrypt('87654321'),
            'role_id' => '3',
            'profile_picture' => 'default.jpg',
            'status' => true,
            'created_at' => '2016-03-16 00:00:00',
            'updated_at' => '2016-03-16 00:00:00',
        ]);
        factory(Novus\User::class, 49)->create();
    }
}
