<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePrueba extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 16);
            $table->string('last_name', 16);
            $table->date('birthday');
            $table->char('status', 1)->default('A');
            $table->timestamps();
        });

        Schema::create('usuario_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->string('facebook', 32);
            $table->string('twitter', 32);
            $table->text('description')->nullable()->default(null);
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
        Schema::drop('usuarios');
        Schema::drop('usuario_profiles');
    }
}
