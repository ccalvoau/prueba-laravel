<?php

use Illuminate\Database\Seeder;

class CreateTablePruebaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*for ($i = 1; $i <=40; $i++)
        {
            $id = factory(Novus\Usuario::class)->create();
            factory(Novus\UsuarioProfile::class, 40)->make( ['id' => $id] );
        }*/
        factory(Novus\UsuarioProfile::class, 40)->create();
    }
}
