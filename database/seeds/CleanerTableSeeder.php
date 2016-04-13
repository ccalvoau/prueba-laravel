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
            'id_number' => '17285319',
            'document_id' => '2',
            'first_name1' => 'CARLOS',
            'first_name2' => 'EDUARDO',
            'last_name1' => 'CALVO',
            'last_name2' => 'FERNANDEZ',
            'gender' => 'M',
            'birthday' => '1986-01-16',
            'phone_number' => '0477 783 958',
            'email' => 'carloscalvo.au@gmail.com',
            'tfn' => '963 411 073',
            'abn' => '97 291 725 983',
            'dlicence_no' => '20834747269',
            'own_vehicle' => 'false',
            'no_jobs' => '52',
            'no_hours' => '320',
            'amount_earned' => '6410.5',
            'description' => 'Cleaner recommended by Javier Amaya.',
            'status' => true,
            'created_at' => '2016-03-16 00:00:00',
            'updated_at' => '2016-03-16 00:00:00',
        ]);
        factory(Novus\Cleaner::class, 35)->create();
    }
}
