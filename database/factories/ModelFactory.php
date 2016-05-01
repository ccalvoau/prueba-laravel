<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(Novus\User::class, function (Faker\Generator $faker) {
    return [
        'cleaner_id' => 0,
        'first_name' => strtoupper($faker->firstName()),
        'last_name' => strtoupper($faker->lastName()),
        'email' => strtolower($faker->freeEmail()),
        'validated' => $faker->boolean($chanceOfGettingTrue = 50),
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'role_id' => $faker->numberBetween($min = 1, $max = 4),
        'profile_picture' => 'default.jpg',
        'description' => $faker->text($maxNbChars = 100),
        'status' => $faker->boolean($chanceOfGettingTrue = 50),
        'created_at' => '2016-03-16 00:00:00',
        'updated_at' => '2016-03-16 00:00:00',
    ];
});

$factory->define(Novus\Cleaner::class, function (Faker\Generator $faker) {

    $licence_no = $faker->boolean($chanceOfGettingTrue = 50);
    if ($licence_no) {
        $licence_no = strtoupper($faker->bothify('##??##??##??##??'));
    } else {
        $licence_no = null;
    }

    return [
        'user_id' => $faker->numberBetween($min = 2, $max = 36),
        'id_number' => $faker->randomNumber($nbDigits = 8),
        'document_id' => $faker->numberBetween($min = 1, $max = 3),
        'first_name1' => strtoupper($faker->firstName()),
        'first_name2' => strtoupper($faker->firstName()),
        'last_name1' => strtoupper($faker->lastName()),
        'last_name2' => strtoupper($faker->lastName()),
        'phone_number' => $faker->numerify('04## ### ###'),
        'email' => strtolower($faker->freeEmail()),
        'gender' => $faker->randomElement($array = array('M', 'F')),
        'date_of_birth' => $faker->date($format = 'Y-m-d', $max = '1997-01-01'),
        'country_id' => $faker->randomElement($array = array(32, 36, 76, 156, 170, 192, 276, 300, 360, 368, 392, 724, 826, 862)),
        'language_id' => $faker->numberBetween($min = 1, $max = 182),
        'english_level_id' => $faker->numberBetween($min = 1, $max = 10),
        'profile_picture' => 'default.jpg',
        'tfn' => $faker->numerify('### ### ###'),
        'abn' => $faker->numerify('## ### ### ###'),
        'licence_no' => $licence_no,
        'own_vehicle' => $faker->boolean($chanceOfGettingTrue = 10),
        'licence_picture' => 'default.jpg',
        'no_jobs' => $faker->randomNumber($nbDigits = 2),
        'no_hours' => $faker->randomNumber($nbDigits = 2),
        'profit' => $faker->randomFloat($nbMaxDecimals = 2, $min = 4, $max = 4),
        'description' => $faker->text($maxNbChars = 100),
        'status' => $faker->boolean($chanceOfGettingTrue = 50),
        'created_at' => '2016-03-16 00:00:00',
        'updated_at' => '2016-03-16 00:00:00',
    ];
});

$factory->define(Novus\PaymentInfo::class, function (Faker\Generator $faker) {
    return [
        'cleaner_id' => $faker->numberBetween($min = 1, $max = 36),
        'bank_id' => $faker->numberBetween($min = 1, $max = 4),
        'bsb' => $faker->numerify('######'),
        'account_number' => $faker->numerify('##########'),
        'description' => $faker->text($maxNbChars = 100),
        'is_default' => $faker->boolean($chanceOfGettingTrue = 5),
        'created_at' => '2016-03-16 00:00:00',
        'updated_at' => '2016-03-16 00:00:00',
    ];
});

$factory->define(Novus\Client::class, function (Faker\Generator $faker) {
    return [
        'first_name1' => strtoupper($faker->firstName()),
        'first_name2' => strtoupper($faker->firstName()),
        'last_name1' => strtoupper($faker->lastName()),
        'last_name2' => strtoupper($faker->lastName()),
        'client_type_id' => $faker->numberBetween($min = 1, $max = 6),
        'phone_number' => $faker->numerify('04## ### ###'),
        'email' => strtolower($faker->freeEmail()),
        'description' => $faker->text($maxNbChars = 100),
        'status' => $faker->boolean($chanceOfGettingTrue = 50),
        'created_at' => '2016-03-16 00:00:00',
        'updated_at' => '2016-03-16 00:00:00',
    ];
});

$factory->define(Novus\Place::class, function (Faker\Generator $faker) {

    $verified = $faker->boolean($chanceOfGettingTrue = 50);
    if ($verified) {
        $cleaner_id = $faker->numberBetween($min = 1, $max = 36);
    } else {
        $cleaner_id = null;
    }

    return [
        'client_id' => $faker->numberBetween($min = 1, $max = 56),
        'unit_number' => $faker->numerify('####'),
        'street_number' => $faker->numerify('###'),
        'street_name' => strtoupper($faker->streetName()),
        'street_type_id' => $faker->numberBetween($min = 1, $max = 70),
        'suburb' => strtoupper($faker->city()),
        'state_id' => $faker->numberBetween($min = 1, $max = 7),
        'postcode' => $faker->numerify('####'),
        'reference' => $faker->text($maxNbChars = 50),
        'status' => $faker->boolean($chanceOfGettingTrue = 50),
        'verified' => $verified,
        'latitude' => $faker->latitude($min = -90, $max = 90),
        'longitude' => $faker->longitude($min = -180, $max = 180),
        'cleaner_id' => $cleaner_id,
        'no_jobs' => $faker->numberBetween($min = 1, $max = 50),
        'created_at' => '2016-03-16 00:00:00',
        'updated_at' => '2016-03-16 00:00:00',
    ];
});

$factory->define(Novus\Team::class, function (Faker\Generator $faker) {

    $no_cleaners = $faker->numberBetween($min = 2, $max = 3);
    switch($no_cleaners)
    {
        case 2:
            $cleaner_id2 = $faker->numberBetween($min = 1, $max = 36);
            $cleaner_id3 = 0;
            break;

        case 3:
            $cleaner_id2 = $faker->numberBetween($min = 1, $max = 36);
            $cleaner_id3 = $faker->numberBetween($min = 1, $max = 36);
            break;
    }

    return [
        'alias' => strtoupper($faker->safeColorName()),
        'leader' => $faker->numberBetween($min = 1, $max = 36),
        'cleaner_id2' => $cleaner_id2,
        'cleaner_id3' => $cleaner_id3,
        'cleaner_id4' => 0,
        'cleaner_id5' => 0,
        'cleaner_id6' => 0,
        'vehicle_id' => $faker->numberBetween($min = 1, $max = 7),
        'description' => $faker->text($maxNbChars = 50),
        'status' => true,
        'created_at' => '2016-03-16 00:00:00',
        'updated_at' => '2016-03-16 00:00:00',
    ];
});

$factory->define(Novus\Job::class, function (Faker\Generator $faker) {
    return [
        'client_id' => $faker->numberBetween($min = 1, $max = 56),
        'client_type_id' => $faker->numberBetween($min = 1, $max = 6),
        'place_id' => $faker->numberBetween($min = 1, $max = 56),
        'team_id' => $faker->numberBetween($min = 1, $max = 15),
        'quote_id' => $faker->numberBetween($min = 1, $max = 76),
        'job_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'job_time' => $faker->time($format = 'H:i:s', $max = 'now'),
        'description' => $faker->text($maxNbChars = 100),
        'status_job_id' => $faker->numberBetween($min = 1, $max = 6),
        'no_hours' => $faker->randomNumber($nbDigits = 2),
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 3, $max = 3),
        'created_at' => '2016-03-16 00:00:00',
        'updated_at' => '2016-03-16 00:00:00',
    ];
});

$factory->define(Novus\Availability::class, function (Faker\Generator $faker) {
    return [
        'timetable' => $faker->text($maxNbChars = 100),
        'created_at' => '2016-03-16 00:00:00',
        'updated_at' => '2016-03-16 00:00:00',
    ];
});

$factory->define(Novus\Vehicle::class, function (Faker\Generator $faker) {
    return [
        'registration_no' => strtoupper($faker->bothify('##??##??##??##??')),
        'vin' => strtoupper($faker->bothify('##??##??##??##??')),
        'engine_no' => strtoupper($faker->bothify('##??##??##??##??')),
        'make' => strtoupper($faker->colorName()),
        'colour' => strtoupper($faker->colorName()),
        'type' => $faker->randomElement($array = array('SEDAN', 'WAGON', 'SUV')),
        'year' => $faker->year($max = 'now'),
        'plate' => strtoupper($faker->bothify('##??##??##??##??')),
        'registration_expire' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'owner' => strtoupper($faker->name()),
        'vehicle_picture' => 'default.jpg',
        'description' => $faker->text($maxNbChars = 50),
        'status' => true,
        'created_at' => '2016-03-16 00:00:00',
        'updated_at' => '2016-03-16 00:00:00',
    ];
});

$factory->define(Novus\CleanerJob::class, function (Faker\Generator $faker) {
    return [
        'cleaner_id' => $faker->numberBetween($min = 1, $max = 36),
        'job_id' => $faker->numberBetween($min = 1, $max = 76),
        'place_id' => $faker->numberBetween($min = 1, $max = 73),
        'job_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'no_hours' => $faker->numberBetween($min = 1, $max = 14),
        'amount' => $faker->randomFloat($nbMaxDecimals = 2, $min = 3, $max = 4),
        'created_at' => '2016-03-16 00:00:00',
        'updated_at' => '2016-03-16 00:00:00',
    ];
});

$factory->define(Novus\Payment::class, function (Faker\Generator $faker) {
    return [
        'payment_info_id' => $faker->numberBetween($min = 1, $max = 76),
        'cleaner_job_id' => $faker->numberBetween($min = 1, $max = 40),
        'amount' => $faker->randomFloat($nbMaxDecimals = 2, $min = 3, $max = 4),
        'payment_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'created_at' => '2016-03-16 00:00:00',
        'updated_at' => '2016-03-16 00:00:00',
    ];
});


/*
$factory->define(Novus\UsuarioProfile::class, function ($faker) {
    return [
        'usuario_id'     => factory('Novus\Usuario')->create()->id,
        'facebook' => strtoupper($faker->userName()),
        'twitter' => strtoupper($faker->userName()),
        'description' => $faker->text($maxNbChars = 50),
        'created_at' => '2016-03-16 00:00:00',
        'updated_at' => '2016-03-16 00:00:00',
    ];
});
*/