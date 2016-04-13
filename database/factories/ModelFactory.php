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
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'role' => $faker->randomElement(['user','admin','super']),
    ];
});

$factory->define(Novus\Cleaner::class, function (Faker\Generator $faker) {

    $dlicence_no = $faker->boolean($chanceOfGettingTrue = 50);
    if ($dlicence_no) {
        $dlicence_no = strtoupper($faker->bothify('##??##??##??##??'));
    } else {
        $dlicence_no = null;
    }

    return [
        'id_number' => $faker->randomNumber($nbDigits = 8),
        'document_id' => $faker->numberBetween($min = 1, $max = 3),
        'first_name1' => strtoupper($faker->firstName()),
        'first_name2' => strtoupper($faker->firstName()),
        'last_name1' => strtoupper($faker->lastName()),
        'last_name2' => strtoupper($faker->lastName()),
        'gender' => $faker->randomElement($array = array('M', 'F')),
        'birthday' => $faker->date($format = 'Y-m-d', $max = '1997-01-01'),
        'phone_number' => $faker->numerify('04## ### ###'),
        'email' => strtolower($faker->freeEmail()),
        'tfn' => $faker->numerify('### ### ###'),
        'abn' => $faker->numerify('## ### ### ###'),
        'dlicence_no' => $dlicence_no,
        'own_vehicle' => $faker->boolean($chanceOfGettingTrue = 10),
        'no_jobs' => $faker->randomNumber($nbDigits = 2),
        'no_hours' => $faker->randomNumber($nbDigits = 2),
        'amount_earned' => $faker->randomFloat($nbMaxDecimals = 2, $min = 4, $max = 4),
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
        'account_number' => $faker->numerify('#########'),
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
        'referencep' => $faker->text($maxNbChars = 50),
        'verified' => $verified,
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
            $cleaner_id3 = null;
            break;

        case 3:
            $cleaner_id2 = $faker->numberBetween($min = 1, $max = 36);
            $cleaner_id3 = $faker->numberBetween($min = 1, $max = 36);
            break;
    }

    return [
        'alias' => $faker->safeColorName(),
        'leader' => $faker->numberBetween($min = 1, $max = 36),
        'cleaner_id2' => $cleaner_id2,
        'cleaner_id3' => $cleaner_id3,
        'cleaner_id4' => null,
        'cleaner_id5' => null,
        'cleaner_id6' => null,
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
        'statusjob_id' => $faker->numberBetween($min = 1, $max = 6),
        'no_hours' => $faker->randomNumber($nbDigits = 2),
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 3, $max = 3),
        'created_at' => '2016-03-16 00:00:00',
        'updated_at' => '2016-03-16 00:00:00',
    ];
});

$factory->define(Novus\Availability::class, function (Faker\Generator $faker) {
    return [
        'cleaner_id' => $faker->numberBetween($min = 1, $max = 36),
        'schedule' => 'CADENA',
        'created_at' => '2016-03-16 00:00:00',
        'updated_at' => '2016-03-16 00:00:00',
    ];
});

$factory->define(Novus\Vehicle::class, function (Faker\Generator $faker) {
    return [
        'register' => strtoupper($faker->bothify('##??##??##??##??')),
        'driver' => $faker->numberBetween($min = 1, $max = 36),
        'team_id' => $faker->numberBetween($min = 1, $max = 12),
        'description' => $faker->text($maxNbChars = 50),
        'status' => true,
        'created_at' => '2016-03-16 00:00:00',
        'updated_at' => '2016-03-16 00:00:00'
    ];
});

$factory->define(Novus\Cleanerjob::class, function (Faker\Generator $faker) {
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
        'paymentinfo_id' => $faker->numberBetween($min = 1, $max = 76),
        'cleanerjob_id' => $faker->numberBetween($min = 1, $max = 40),
        'amount' => $faker->randomFloat($nbMaxDecimals = 2, $min = 3, $max = 4),
        'payment_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'created_at' => '2016-03-16 00:00:00',
        'updated_at' => '2016-03-16 00:00:00',
    ];
});


$factory->define(Novus\Usuario::class, function (Faker\Generator $faker) {
    return [
        'first_name' => strtoupper($faker->firstName()),
        'last_name' => strtoupper($faker->lastName()),
        'birthday' => $faker->date($format = 'Y-m-d', $max = '1997-01-01'),
        'status' => $faker->randomElement($array = array('A', 'I')),
        'created_at' => '2016-03-16 00:00:00',
        'updated_at' => '2016-03-16 00:00:00',
    ];
});

/*$factory->define(Novus\UsuarioProfile::class, function (Faker\Generator $faker) {
    return [
        'usuario_id' => $faker->numberBetween($min = 1, $max = 40),
        'facebook' => strtoupper($faker->userName()),
        'twitter' => strtoupper($faker->userName()),
        'description' => $faker->text($maxNbChars = 50),
        'created_at' => '2016-03-16 00:00:00',
        'updated_at' => '2016-03-16 00:00:00',
    ];
});*/

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