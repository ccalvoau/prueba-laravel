<?php

use Illuminate\Database\Seeder;

class CleanerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Novus\Cleaner::class)->create([
            'user_id' => '1',
            'id_number' => '17285319',
            'document_id' => '2',
            'first_name1' => 'CARLOS',
            'first_name2' => 'EDUARDO',
            'last_name1' => 'CALVO',
            'last_name2' => 'FERNANDEZ',
            'phone_number' => '0477 783 958',
            'email' => 'carloscalvo.au@gmail.com',
            'gender' => 'M',
            'date_of_birth' => '1986-01-16',
            'country_id' => '862',
            'language_id' => '148',
            'english_level_id' => '9',
            'profile_picture' => 'TSx1nfEu8xDwFAPjYdSWBuzJ46x.jpg',
            'tfn' => '963 411 073',
            'abn' => '97 291 725 983',
            'licence_no' => '20834747269',
            'own_vehicle' => false,
            'licence_picture' => 'default.jpg',
            'no_jobs' => '52',
            'no_hours' => '320',
            'profit' => '6410.5',
            'availability_id' => '1',
            'description' => 'Cleaner recommended by Javier Amaya.',
            'status' => true,
            'created_at' => '2016-03-16 00:00:00',
            'updated_at' => '2016-03-16 00:00:00',
        ]);
        factory(Novus\Cleaner::class)->create([
            'user_id' => '2',
            'id_number' => '17285318',
            'document_id' => '2',
            'first_name1' => 'VANESSA',
            'first_name2' => null,
            'last_name1' => 'FERNANDEZ',
            'last_name2' => 'FERNANDEZ',
            'phone_number' => '0477 783 957',
            'email' => 'vf@gmail.com',
            'gender' => 'F',
            'date_of_birth' => '1986-01-16',
            'country_id' => '862',
            'language_id' => '148',
            'english_level_id' => '9',
            'profile_picture' => 'default.jpg',
            'tfn' => '963 411 072',
            'abn' => '97 291 725 982',
            'licence_no' => '20834747269',
            'own_vehicle' => false,
            'licence_picture' => 'default.jpg',
            'no_jobs' => '52',
            'no_hours' => '320',
            'profit' => '6410.5',
            'availability_id' => '2',
            'description' => 'Cleaner recommended by Carlos Calvo.',
            'status' => true,
            'created_at' => '2016-03-16 00:00:00',
            'updated_at' => '2016-03-16 00:00:00',
        ]);
        factory(Novus\Cleaner::class)->create([
            'user_id' => '3',
            'id_number' => '17285317',
            'document_id' => '2',
            'first_name1' => 'ROSAMARY',
            'first_name2' => null,
            'last_name1' => 'FERNANDEZ',
            'last_name2' => 'FERNANDEZ',
            'phone_number' => '0477 783 956',
            'email' => 'rm@gmail.com',
            'gender' => 'F',
            'date_of_birth' => '1986-01-16',
            'country_id' => '862',
            'language_id' => '148',
            'english_level_id' => '9',
            'profile_picture' => 'default.jpg',
            'tfn' => '963 411 071',
            'abn' => '97 291 725 981',
            'licence_no' => '20834747269',
            'own_vehicle' => false,
            'licence_picture' => 'default.jpg',
            'no_jobs' => '52',
            'no_hours' => '320',
            'profit' => '6410.5',
            'availability_id' => '3',
            'description' => 'Cleaner recommended by Vanessa Fernandez.',
            'status' => true,
            'created_at' => '2016-03-16 00:00:00',
            'updated_at' => '2016-03-16 00:00:00',
        ]);
        factory(Novus\Cleaner::class, 35)->create();
    }
}
