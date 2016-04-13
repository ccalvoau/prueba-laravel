<?php

use Illuminate\Database\Seeder;

class PaymentInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Novus\PaymentInfo::class, 100)->create();
    }
}
