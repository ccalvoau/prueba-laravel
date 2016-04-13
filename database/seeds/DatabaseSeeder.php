<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(CreateTablePruebaSeeder::class);

        $this->command->info('<--- ******* --->');
        $this->command->info('Starting Seeding!');
        $this->command->info('<--- ******* --->');

        $this->call(OtherTablesSeeder::class);
        $this->command->info('Other Tables seeded!');

        $this->call(UserTableSeeder::class);
        $this->command->info('User Table seeded!');

        $this->call(CleanerTableSeeder::class);
        $this->command->info('Cleaner Table seeded!');

        $this->call(PaymentInfoTableSeeder::class);
        $this->command->info('PaymentInfo Table seeded!');

        $this->call(ClientTableSeeder::class);
        $this->command->info('Client Table seeded!');

        $this->call(PlaceTableSeeder::class);
        $this->command->info('Place Table seeded!');

        $this->call(TeamTableSeeder::class);
        $this->command->info('Team Table seeded!');

        $this->call(JobTableSeeder::class);
        $this->command->info('Job Table seeded!');

        $this->call(AvailabilityTableSeeder::class);
        $this->command->info('Availability Table seeded!');

        $this->call(VehicleTableSeeder::class);
        $this->command->info('Vehicle Table seeded!');

        $this->call(CleanerjobTableSeeder::class);
        $this->command->info('Cleanerjob Table seeded!');

        $this->call(PaymentTableSeeder::class);
        $this->command->info('Payment Table seeded!');

        Model::reguard();
    }
}
