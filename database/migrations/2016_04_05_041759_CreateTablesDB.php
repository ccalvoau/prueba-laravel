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
        Schema::create('availabilitys', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cleaner_id')->unsigned();
            $table->text('schedule');
            $table->timestamps();
        });

        Schema::create('banks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 64);
            $table->text('description')->nullable();
            $table->boolean('status')->default(true);
        });

        Schema::create('cleanerjobs', function (Blueprint $table) {
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
            $table->string('id_number', 16);
            $table->integer('document_id')->unsigned();
            $table->string('first_name1', 16);
            $table->string('first_name2', 16)->nullable()->default(null);
            $table->string('last_name1', 16);
            $table->string('last_name2', 16)->nullable()->default(null);
            $table->char('gender', 1);
            $table->date('birthday');
            $table->string('phone_number', 12);
            $table->string('email', 32);
            $table->string('tfn', 11)->nullable()->default(null);
            $table->string('abn', 14)->nullable()->default(null);
            $table->string('dlicence_no', 16)->nullable()->default(null);
            $table->boolean('own_vehicle')->default(false);
            $table->integer('no_jobs')->default('0');
            $table->integer('no_hours')->default('0');
            $table->decimal('amount_earned', 7, 2)->default('0.00');
            $table->text('description')->nullable()->default(null);
            $table->boolean('status')->default(true);
            $table->timestamps();
        });

        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name1', 16);
            $table->string('first_name2', 16)->nullable();
            $table->string('last_name1', 16);
            $table->string('last_name2', 16)->nullable();
            $table->integer('client_type_id')->unsigned();
            $table->string('phone_number', 12)->unique();
            $table->string('email', 32)->unique();
            $table->text('description')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });

        Schema::create('client_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 32);
            $table->text('description')->nullable();
            $table->boolean('status')->default(true);
        });

        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 16);
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
            $table->integer('statusjob_id')->unsigned();
            $table->integer('no_hours')->nullable();
            $table->decimal('price', 3, 2)->nullable();
            $table->timestamps();
        });

        Schema::create('partcategorys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 64);
            $table->boolean('status')->default(true);
        });

        Schema::create('parts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('partcategory_id')->unsigned();
            $table->integer('partid')->unsigned();
            $table->string('name', 64);
            $table->text('description')->nullable();
            $table->boolean('status')->default(true);
        });

        Schema::create('payment_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cleaner_id')->unsigned();
            $table->integer('bank_id')->unsigned();
            $table->string('bsb', 6);
            $table->string('account_number', 9);
            $table->text('description')->nullable();
            $table->boolean('is_default')->default(false);
            $table->timestamps();
        });

        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paymentinfo_id')->unsigned();
            $table->integer('cleanerjob_id')->unsigned();
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
            $table->text('referencep')->nullable();
            $table->boolean('verified')->default(false);
            $table->integer('cleaner_id')->nullable();
            $table->integer('no_jobs')->default('0');
            $table->timestamps();
        });

        Schema::create('quotehours', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('partcategory_id')->unsigned();
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
            $table->text('description')->nullable();
            $table->boolean('accepted')->default(true);
            $table->timestamps();
        });

        Schema::create('sizes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 16);
            $table->boolean('status')->default(true);
        });

        Schema::create('states', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 32);
            $table->text('description')->nullable();
            $table->boolean('status')->default(true);
        });

        Schema::create('statusjobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 16);
            $table->text('description')->nullable();
            $table->boolean('status')->default(true);
        });

        Schema::create('street_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 32);
            $table->text('description')->nullable();
            $table->boolean('status')->default(true);
        });

        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('alias', 32);
            $table->integer('leader')->unsigned();
            $table->integer('cleaner_id2')->unsigned()->nullable();
            $table->integer('cleaner_id3')->unsigned()->nullable();
            $table->integer('cleaner_id4')->unsigned()->nullable();
            $table->integer('cleaner_id5')->unsigned()->nullable();
            $table->integer('cleaner_id6')->unsigned()->nullable();
            $table->text('description')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });

        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('register', 32);
            $table->integer('driver')->unsigned();
            $table->integer('team_id')->unsigned();
            $table->text('description')->nullable();
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
        Schema::drop('availabilitys');
        Schema::drop('banks');
        Schema::drop('cleanerjobs');
        Schema::drop('cleaners');
        Schema::drop('clients');
        Schema::drop('client_types');
        Schema::drop('documents');
        Schema::drop('jobs');
        Schema::drop('partcategorys');
        Schema::drop('parts');
        Schema::drop('payment_infos');
        Schema::drop('payments');
        Schema::drop('places');
        Schema::drop('quotehours');
        Schema::drop('quotes');
        Schema::drop('sizes');
        Schema::drop('states');
        Schema::drop('statusjobs');
        Schema::drop('street_types');
        Schema::drop('teams');
        Schema::drop('vehicles');
    }
}
