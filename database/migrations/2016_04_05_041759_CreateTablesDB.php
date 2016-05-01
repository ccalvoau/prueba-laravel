<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablesDB extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('availabilities', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('timetable')->default('[[00:00,0;01:00,0;02:00,0;03:00,0;04:00,0;05:00,0;06:00,0;07:00,0;08:00,0;09:00,0;10:00,0;11:00,0;12:00,0;13:00,0;14:00,0;15:00,0;16:00,0;17:00,0;18:00,0;19:00,0;20:00,0;21:00,0;22:00,0;23:00,0]|[00:00,0;01:00,0;02:00,0;03:00,0;04:00,0;05:00,0;06:00,0;07:00,0;08:00,0;09:00,0;10:00,0;11:00,0;12:00,0;13:00,0;14:00,0;15:00,0;16:00,0;17:00,0;18:00,0;19:00,0;20:00,0;21:00,0;22:00,0;23:00,0]|[00:00,0;01:00,0;02:00,0;03:00,0;04:00,0;05:00,0;06:00,0;07:00,0;08:00,0;09:00,0;10:00,0;11:00,0;12:00,0;13:00,0;14:00,0;15:00,0;16:00,0;17:00,0;18:00,0;19:00,0;20:00,0;21:00,0;22:00,0;23:00,0]|[00:00,0;01:00,0;02:00,0;03:00,0;04:00,0;05:00,0;06:00,0;07:00,0;08:00,0;09:00,0;10:00,0;11:00,0;12:00,0;13:00,0;14:00,0;15:00,0;16:00,0;17:00,0;18:00,0;19:00,0;20:00,0;21:00,0;22:00,0;23:00,0]|[00:00,0;01:00,0;02:00,0;03:00,0;04:00,0;05:00,0;06:00,0;07:00,0;08:00,0;09:00,0;10:00,0;11:00,0;12:00,0;13:00,0;14:00,0;15:00,0;16:00,0;17:00,0;18:00,0;19:00,0;20:00,0;21:00,0;22:00,0;23:00,0]|[00:00,0;01:00,0;02:00,0;03:00,0;04:00,0;05:00,0;06:00,0;07:00,0;08:00,0;09:00,0;10:00,0;11:00,0;12:00,0;13:00,0;14:00,0;15:00,0;16:00,0;17:00,0;18:00,0;19:00,0;20:00,0;21:00,0;22:00,0;23:00,0]|[00:00,0;01:00,0;02:00,0;03:00,0;04:00,0;05:00,0;06:00,0;07:00,0;08:00,0;09:00,0;10:00,0;11:00,0;12:00,0;13:00,0;14:00,0;15:00,0;16:00,0;17:00,0;18:00,0;19:00,0;20:00,0;21:00,0;22:00,0;23:00,0]]');
            $table->timestamps();
        });

        Schema::create('banks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 64);
            $table->text('description')->nullable()->default(null);
            $table->boolean('status')->default(true);
        });

        Schema::create('cleaner_jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cleaner_id')->unsigned();
            $table->integer('job_id')->unsigned();
            $table->integer('place_id')->unsigned();
            $table->date('job_date');
            $table->integer('no_hours');
            $table->decimal('amount', 3, 2);
            $table->timestamps();
        });

        Schema::create('cleaners', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->default(0);
            $table->string('id_number', 16);
            $table->integer('document_id')->unsigned();
            $table->string('first_name1', 16);
            $table->string('first_name2', 16)->nullable()->default(null);
            $table->string('last_name1', 16);
            $table->string('last_name2', 16)->nullable()->default(null);
            $table->string('phone_number', 12);
            $table->string('email', 32);
            $table->char('gender', 1);
            $table->date('date_of_birth');
            $table->string('country_id')->unsigned();
            $table->integer('language_id')->unsigned();
            $table->integer('english_level_id')->unsigned();
            $table->string('profile_picture', 32)->nullable()->default('default.jpg');
            $table->string('tfn', 11)->nullable()->default(null);
            $table->string('abn', 14)->nullable()->default(null);
            $table->string('licence_no', 16)->nullable()->default(null);
            $table->boolean('own_vehicle')->default(false);
            $table->string('licence_picture', 32)->nullable()->default('default.jpg');
            $table->integer('no_jobs')->default('0');
            $table->integer('no_hours')->default('0');
            $table->decimal('profit', 7, 2)->default('0.00');
            $table->text('availability_id')->nullable()->default(null);
            $table->text('description')->nullable()->default(null);
            $table->boolean('status')->default(true);
            $table->timestamps();
        });

        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name1', 16);
            $table->string('first_name2', 16)->nullable()->default(null);
            $table->string('last_name1', 16);
            $table->string('last_name2', 16)->nullable()->default(null);
            $table->integer('client_type_id')->unsigned();
            $table->string('phone_number', 12)->unique();
            $table->string('email', 32)->unique();
            $table->text('description')->nullable()->default(null);
            $table->boolean('status')->default(true);
            $table->timestamps();
        });

        Schema::create('client_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 32);
            $table->text('description')->nullable()->default(null);
            $table->boolean('status')->default(true);
        });

        Schema::create('countries', function (Blueprint $table) {
            $table->integer('id')->index();
            $table->string('capital', 255)->nullable();
            $table->string('citizenship', 255)->nullable();
            $table->string('country_code', 3)->default('');
            $table->string('currency', 255)->nullable();
            $table->string('currency_code', 255)->nullable();
            $table->string('currency_sub_unit', 255)->nullable();
            $table->string('currency_symbol', 3)->nullable();
            $table->string('full_name', 255)->nullable();
            $table->string('iso_3166_2', 2)->default('');
            $table->string('iso_3166_3', 3)->default('');
            $table->string('name', 255)->default('');
            $table->string('region_code', 3)->default('');
            $table->string('sub_region_code', 3)->default('');
            $table->boolean('eea')->default(0);
            $table->string('calling_code', 3)->nullable();
            $table->string('flag', 6)->nullable();

            $table->primary('id');
        });

        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 16);
            $table->boolean('status')->default(true);
        });

        Schema::create('english_levels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lse_class', 32);
            $table->text('description')->nullable()->default(null);
            $table->string('cef', 4);
            $table->boolean('status')->default(true);
        });

        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned();
            $table->integer('client_type_id')->unsigned();
            $table->integer('place_id')->unsigned();
            $table->integer('team_id')->unsigned();
            $table->integer('quote_id')->unsigned();
            $table->date('job_date');
            $table->time('job_time');
            $table->text('description')->nullable();
            $table->integer('status_job_id')->unsigned();
            $table->integer('no_hours')->nullable();
            $table->decimal('price', 3, 2)->nullable();
            $table->timestamps();
        });

        Schema::create('languages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 2);
            $table->string('name', 128);
            $table->text('description')->nullable()->default(null);
            $table->boolean('status')->default(true);
        });

        Schema::create('part_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 64);
            $table->boolean('status')->default(true);
        });

        Schema::create('parts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('part_category_id')->unsigned();
            $table->integer('partid')->unsigned();
            $table->string('name', 64);
            $table->text('description')->nullable()->default(null);
            $table->boolean('status')->default(true);
        });

        Schema::create('payment_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cleaner_id')->unsigned();
            $table->integer('bank_id')->unsigned();
            $table->string('bsb', 6);
            $table->string('account_number', 10);
            $table->text('description')->nullable()->default(null);
            $table->boolean('is_default')->default(false);
            $table->timestamps();
        });

        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('payment_info_id')->unsigned();
            $table->integer('cleaner_job_id')->unsigned();
            $table->decimal('amount', 4, 2);
            $table->date('payment_date');
            $table->timestamps();
        });

        Schema::create('places', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned();
            $table->integer('unit_number');
            $table->integer('street_number');
            $table->string('street_name', 32);
            $table->integer('street_type_id')->unsigned();
            $table->string('suburb', 32);
            $table->integer('state_id')->unsigned();
            $table->string('postcode', 4);
            $table->text('reference')->nullable()->default(null);
            $table->boolean('status')->default(true);
            $table->boolean('verified')->default(false);
            $table->double('latitude', 20, 10)->nullable();
            $table->double('longitude', 20, 10)->nullable();
            $table->integer('cleaner_id')->nullable();
            $table->integer('no_jobs')->default('0');
            $table->timestamps();
        });

        Schema::create('quote_hours', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('part_category_id')->unsigned();
            $table->integer('partid')->unsigned();
            $table->integer('size_id')->unsigned();
            $table->time('duration');
            $table->text('description')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });

        Schema::create('quotes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cleaner_id')->unsigned();
            $table->date('date');
            $table->decimal('price', 3, 2);
            $table->text('description')->nullable()->default(null);
            $table->boolean('accepted')->default(true);
            $table->timestamps();
        });

        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 16);
            $table->text('description')->nullable()->default(null);
            $table->boolean('status')->default(true);
        });

        Schema::create('sizes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 16);
            $table->boolean('status')->default(true);
        });

        Schema::create('states', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 32);
            $table->text('description')->nullable()->default(null);
            $table->boolean('status')->default(true);
        });

        Schema::create('status_jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 16);
            $table->text('description')->nullable()->default(null);
            $table->boolean('status')->default(true);
        });

        Schema::create('street_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 32);
            $table->text('description')->nullable()->default(null);
            $table->boolean('status')->default(true);
        });

        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('alias', 32);
            $table->integer('leader')->unsigned();
            $table->integer('cleaner_id2')->unsigned();
            $table->integer('cleaner_id3')->unsigned()->nullable()->default(null);
            $table->integer('cleaner_id4')->unsigned()->nullable()->default(null);
            $table->integer('cleaner_id5')->unsigned()->nullable()->default(null);
            $table->integer('cleaner_id6')->unsigned()->nullable()->default(null);
            $table->integer('vehicle_id')->unsigned()->nullable()->default(null);
            $table->text('description')->nullable()->default(null);
            $table->boolean('status')->default(true);
            $table->timestamps();
        });

        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('registration_no', 32);
            $table->string('vin', 32);
            $table->string('engine_no', 32);
            $table->string('make', 32);
            $table->string('colour', 16);
            $table->string('type', 32);
            $table->string('plate', 16);
            $table->tinyInteger('year');
            $table->date('registration_expire');
            $table->string('owner', 64);
            $table->string('vehicle_picture', 32)->nullable()->default('default.jpg');
            $table->text('description')->nullable()->default(null);
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('availabilities');
        Schema::drop('banks');
        Schema::drop('cleaner_jobs');
        Schema::drop('cleaners');
        Schema::drop('clients');
        Schema::drop('client_types');
        Schema::drop('countries');
        Schema::drop('documents');
        Schema::drop('english_levels');
        Schema::drop('jobs');
        Schema::drop('languages');
        Schema::drop('part_categories');
        Schema::drop('parts');
        Schema::drop('payment_infos');
        Schema::drop('payments');
        Schema::drop('places');
        Schema::drop('quote_hours');
        Schema::drop('quotes');
        Schema::drop('roles');
        Schema::drop('sizes');
        Schema::drop('states');
        Schema::drop('status_jobs');
        Schema::drop('street_types');
        Schema::drop('teams');
        Schema::drop('vehicles');
    }
}
