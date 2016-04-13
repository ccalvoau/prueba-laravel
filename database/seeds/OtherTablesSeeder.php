<?php

use Illuminate\Database\Seeder;

class OtherTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * ONLY FOR ONLY READ TABLES
     *
     * @return void
     */
    public function run()
    {
        // Table banks
        \DB::table('banks')->insert(array('name' => 'COMMONWEALTH BANK OF AUSTRALIA (CBA)'));
        \DB::table('banks')->insert(array('name' => 'WESTPAC BANKING CORPORATION (WESTPAC)'));
        \DB::table('banks')->insert(array('name' => 'NATIONAL AUSTRALIA BANK (NAB)'));
        \DB::table('banks')->insert(array('name' => 'AUSTRALIA AND NEW ZEALAND BANKING GROUP (ANZ)'));

        // Table client_types
        \DB::table('client_types')->insert(array('name' => 'SPRING CLEANING'));
        \DB::table('client_types')->insert(array('name' => 'MOVE IN CLEANING'));
        \DB::table('client_types')->insert(array('name' => 'MOVE OUT CLEANING'));
        \DB::table('client_types')->insert(array('name' => 'END OF LEASE'));
        \DB::table('client_types')->insert(array('name' => 'BUILDERS CLEANING'));
        \DB::table('client_types')->insert(array('name' => 'REGULAR DOMESTIC CLEANING'));

        // Table documents
        \DB::table('documents')->insert(array('name' => 'DNI'));
        \DB::table('documents')->insert(array('name' => 'PASSPORT'));
        \DB::table('documents')->insert(array('name' => 'DRIVING LICENCE'));

        // Table partcategorys
        \DB::table('partcategorys')->insert(array('name' => 'KITCHEN'));
        \DB::table('partcategorys')->insert(array('name' => 'BATHROOM'));
        \DB::table('partcategorys')->insert(array('name' => 'WINDOWS / BLINDS - WASH & BLADE WIPE'));
        \DB::table('partcategorys')->insert(array('name' => 'WALLS & DOORS'));
        \DB::table('partcategorys')->insert(array('name' => 'VENTS & LIGHT FITTINGS'));
        \DB::table('partcategorys')->insert(array('name' => 'FLOORS'));

        // Table parts
        \DB::table('parts')->insert(array('partcategory_id' => '1', 'partid' => '1', 'name' => 'OVEN & RANGEHOOD'));
        \DB::table('parts')->insert(array('partcategory_id' => '1', 'partid' => '2', 'name' => 'KITCHEN CUPBOARDS / DOORS / BENCHTOPS'));
        \DB::table('parts')->insert(array('partcategory_id' => '1', 'partid' => '3', 'name' => 'PANTRY - LARGE CUPBOARD'));
        \DB::table('parts')->insert(array('partcategory_id' => '1', 'partid' => '4', 'name' => 'SPLASHBACKS / TILES'));
        \DB::table('parts')->insert(array('partcategory_id' => '2', 'partid' => '1', 'name' => 'SHOWER - INCLUDING EXHAUST FAN'));
        \DB::table('parts')->insert(array('partcategory_id' => '2', 'partid' => '2', 'name' => 'SINK & VANITY CUPBOARD'));
        \DB::table('parts')->insert(array('partcategory_id' => '2', 'partid' => '3', 'name' => 'BATHROOM MIRROR CABINET'));
        \DB::table('parts')->insert(array('partcategory_id' => '2', 'partid' => '4', 'name' => 'TOILET - INCLUDING WALLS'));
        \DB::table('parts')->insert(array('partcategory_id' => '2', 'partid' => '5', 'name' => 'BATHTUB'));
        \DB::table('parts')->insert(array('partcategory_id' => '3', 'partid' => '1', 'name' => 'INSIDE'));
        \DB::table('parts')->insert(array('partcategory_id' => '3', 'partid' => '2', 'name' => 'OUTSIDE'));
        \DB::table('parts')->insert(array('partcategory_id' => '3', 'partid' => '3', 'name' => 'WINDOW SILLS & SLIDING TRACKS'));
        \DB::table('parts')->insert(array('partcategory_id' => '3', 'partid' => '4', 'name' => 'VENETIAN BLINDS'));
        \DB::table('parts')->insert(array('partcategory_id' => '4', 'partid' => '1', 'name' => 'DRY FLAT MOP DUSTING - EACH WALL'));
        \DB::table('parts')->insert(array('partcategory_id' => '4', 'partid' => '2', 'name' => 'SPOT CLEAN - EACH WALL'));
        \DB::table('parts')->insert(array('partcategory_id' => '4', 'partid' => '3', 'name' => 'WASH - EACH WALL'));
        \DB::table('parts')->insert(array('partcategory_id' => '4', 'partid' => '4', 'name' => 'MOULD REMOVAL - EACH WALL'));
        \DB::table('parts')->insert(array('partcategory_id' => '4', 'partid' => '5', 'name' => 'SKIRTING BOARDS - WHOLE HOUSE PER LEVEL'));
        \DB::table('parts')->insert(array('partcategory_id' => '4', 'partid' => '6', 'name' => 'DOORS & DOOR HANDLES'));
        \DB::table('parts')->insert(array('partcategory_id' => '4', 'partid' => '7', 'name' => 'COBWEBS - WHOLE HOUSE PER LEVEL'));
        \DB::table('parts')->insert(array('partcategory_id' => '4', 'partid' => '8', 'name' => 'LIGHT SWITCHES'));
        \DB::table('parts')->insert(array('partcategory_id' => '5', 'partid' => '1', 'name' => 'VENT - DUST & WET WIPE'));
        \DB::table('parts')->insert(array('partcategory_id' => '5', 'partid' => '2', 'name' => 'LIGHT FITTING - REMOVE / WASH & REPLACE)'));
        \DB::table('parts')->insert(array('partcategory_id' => '6', 'partid' => '1', 'name' => 'VACUUMING - PER LEVEL'));
        \DB::table('parts')->insert(array('partcategory_id' => '6', 'partid' => '2', 'name' => 'MOPPING - PER LEVEL'));
        \DB::table('parts')->insert(array('partcategory_id' => '6', 'partid' => '3', 'name' => 'BALCONY - SWEEP & MOP / WASH'));

        // Table quotehours
        \DB::table('quotehours')->insert(array('partcategory_id' => '1', 'partid' => '1', 'size_id' => '1', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '1', 'partid' => '1', 'size_id' => '2', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '1', 'partid' => '1', 'size_id' => '3', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '1', 'partid' => '2', 'size_id' => '1', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '1', 'partid' => '2', 'size_id' => '2', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '1', 'partid' => '2', 'size_id' => '3', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '1', 'partid' => '3', 'size_id' => '1', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '1', 'partid' => '3', 'size_id' => '2', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '1', 'partid' => '3', 'size_id' => '3', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '1', 'partid' => '4', 'size_id' => '1', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '1', 'partid' => '4', 'size_id' => '2', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '1', 'partid' => '4', 'size_id' => '3', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '2', 'partid' => '1', 'size_id' => '1', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '2', 'partid' => '1', 'size_id' => '2', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '2', 'partid' => '1', 'size_id' => '3', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '2', 'partid' => '2', 'size_id' => '1', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '2', 'partid' => '2', 'size_id' => '2', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '2', 'partid' => '2', 'size_id' => '3', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '2', 'partid' => '3', 'size_id' => '1', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '2', 'partid' => '3', 'size_id' => '2', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '2', 'partid' => '3', 'size_id' => '3', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '2', 'partid' => '4', 'size_id' => '1', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '2', 'partid' => '4', 'size_id' => '2', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '2', 'partid' => '4', 'size_id' => '3', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '2', 'partid' => '5', 'size_id' => '1', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '2', 'partid' => '5', 'size_id' => '2', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '2', 'partid' => '5', 'size_id' => '3', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '3', 'partid' => '1', 'size_id' => '1', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '3', 'partid' => '1', 'size_id' => '2', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '3', 'partid' => '1', 'size_id' => '3', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '3', 'partid' => '2', 'size_id' => '1', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '3', 'partid' => '2', 'size_id' => '2', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '3', 'partid' => '2', 'size_id' => '3', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '3', 'partid' => '3', 'size_id' => '1', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '3', 'partid' => '3', 'size_id' => '2', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '3', 'partid' => '3', 'size_id' => '3', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '3', 'partid' => '4', 'size_id' => '1', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '3', 'partid' => '4', 'size_id' => '2', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '3', 'partid' => '4', 'size_id' => '3', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '4', 'partid' => '1', 'size_id' => '1', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '4', 'partid' => '1', 'size_id' => '2', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '4', 'partid' => '1', 'size_id' => '3', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '4', 'partid' => '2', 'size_id' => '1', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '4', 'partid' => '2', 'size_id' => '2', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '4', 'partid' => '2', 'size_id' => '3', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '4', 'partid' => '3', 'size_id' => '1', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '4', 'partid' => '3', 'size_id' => '2', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '4', 'partid' => '3', 'size_id' => '3', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '4', 'partid' => '4', 'size_id' => '1', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '4', 'partid' => '4', 'size_id' => '2', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '4', 'partid' => '4', 'size_id' => '3', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '4', 'partid' => '5', 'size_id' => '1', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '4', 'partid' => '5', 'size_id' => '2', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '4', 'partid' => '5', 'size_id' => '3', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '4', 'partid' => '6', 'size_id' => '1', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '4', 'partid' => '6', 'size_id' => '2', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '4', 'partid' => '6', 'size_id' => '3', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '4', 'partid' => '7', 'size_id' => '1', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '4', 'partid' => '7', 'size_id' => '2', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '4', 'partid' => '7', 'size_id' => '3', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '4', 'partid' => '8', 'size_id' => '1', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '4', 'partid' => '8', 'size_id' => '2', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '4', 'partid' => '8', 'size_id' => '3', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '5', 'partid' => '1', 'size_id' => '1', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '5', 'partid' => '1', 'size_id' => '2', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '5', 'partid' => '1', 'size_id' => '3', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '5', 'partid' => '2', 'size_id' => '1', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '5', 'partid' => '2', 'size_id' => '2', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '5', 'partid' => '2', 'size_id' => '3', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '6', 'partid' => '1', 'size_id' => '1', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '6', 'partid' => '1', 'size_id' => '2', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '6', 'partid' => '1', 'size_id' => '3', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '6', 'partid' => '2', 'size_id' => '1', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '6', 'partid' => '2', 'size_id' => '2', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '6', 'partid' => '2', 'size_id' => '3', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '6', 'partid' => '3', 'size_id' => '1', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '6', 'partid' => '3', 'size_id' => '2', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));
        \DB::table('quotehours')->insert(array('partcategory_id' => '6', 'partid' => '3', 'size_id' => '3', 'duration' => '00:15:00', 'created_at' => '2016-03-27 00:00:00', 'updated_at' => '2016-03-27 00:00:00'));

        // Table sizes
        \DB::table('sizes')->insert(array('name' => 'SMALL'));
        \DB::table('sizes')->insert(array('name' => 'MEDIUM'));
        \DB::table('sizes')->insert(array('name' => 'LARGE'));

        // Table states
        \DB::table('states')->insert(array('name' => 'NEW SOUTH WALES'));
        \DB::table('states')->insert(array('name' => 'NORTHERN TERRITORY'));
        \DB::table('states')->insert(array('name' => 'QUEENSLAND'));
        \DB::table('states')->insert(array('name' => 'TASMANIA'));
        \DB::table('states')->insert(array('name' => 'SOUTH AUSTRALIA'));
        \DB::table('states')->insert(array('name' => 'VICTORIA'));
        \DB::table('states')->insert(array('name' => 'WESTERN AUSTRALIA'));

        // Table statusjobs
        \DB::table('statusjobs')->insert(array('name' => 'UNASSIGNED'));
        \DB::table('statusjobs')->insert(array('name' => 'ASSIGNED'));
        \DB::table('statusjobs')->insert(array('name' => 'ACCEPTED'));
        \DB::table('statusjobs')->insert(array('name' => 'REJECTED'));
        \DB::table('statusjobs')->insert(array('name' => 'COMPLETED'));
        \DB::table('statusjobs')->insert(array('name' => 'POSTPONED'));
        \DB::table('statusjobs')->insert(array('name' => 'CANCELED'));

        // Table street_types
        \DB::table('street_types')->insert(array('name' => 'STREET'));
        \DB::table('street_types')->insert(array('name' => 'ROAD'));
        \DB::table('street_types')->insert(array('name' => 'DRIVE'));
        \DB::table('street_types')->insert(array('name' => 'PARADE'));
        \DB::table('street_types')->insert(array('name' => 'PLACE'));
        \DB::table('street_types')->insert(array('name' => 'LANE'));
        \DB::table('street_types')->insert(array('name' => 'CLOSE'));
        \DB::table('street_types')->insert(array('name' => 'COURT'));
        \DB::table('street_types')->insert(array('name' => 'CRESCENT'));
        \DB::table('street_types')->insert(array('name' => 'ACCESS'));
        \DB::table('street_types')->insert(array('name' => 'ALLEY'));
        \DB::table('street_types')->insert(array('name' => 'APPROACH'));
        \DB::table('street_types')->insert(array('name' => 'ARCADE'));
        \DB::table('street_types')->insert(array('name' => 'AVENUE'));
        \DB::table('street_types')->insert(array('name' => 'BOULEVARD'));
        \DB::table('street_types')->insert(array('name' => 'BROW'));
        \DB::table('street_types')->insert(array('name' => 'BYPASS'));
        \DB::table('street_types')->insert(array('name' => 'CIRCUIT'));
        \DB::table('street_types')->insert(array('name' => 'CENTRE'));
        \DB::table('street_types')->insert(array('name' => 'CHASE'));
        \DB::table('street_types')->insert(array('name' => 'CIRCUS'));
        \DB::table('street_types')->insert(array('name' => 'CORNER'));
        \DB::table('street_types')->insert(array('name' => 'CONCOURSE'));
        \DB::table('street_types')->insert(array('name' => 'COVE'));
        \DB::table('street_types')->insert(array('name' => 'COPSE'));
        \DB::table('street_types')->insert(array('name' => 'CROSSING'));
        \DB::table('street_types')->insert(array('name' => 'CUL-DE-SAC'));
        \DB::table('street_types')->insert(array('name' => 'CAUSEWAY'));
        \DB::table('street_types')->insert(array('name' => 'END'));
        \DB::table('street_types')->insert(array('name' => 'ESPLANADE'));
        \DB::table('street_types')->insert(array('name' => 'FLAT'));
        \DB::table('street_types')->insert(array('name' => 'FRONTAGE'));
        \DB::table('street_types')->insert(array('name' => 'FREEWAY'));
        \DB::table('street_types')->insert(array('name' => 'GARDENS'));
        \DB::table('street_types')->insert(array('name' => 'GLADE'));
        \DB::table('street_types')->insert(array('name' => 'GLEN'));
        \DB::table('street_types')->insert(array('name' => 'GROVE'));
        \DB::table('street_types')->insert(array('name' => 'GREEN'));
        \DB::table('street_types')->insert(array('name' => 'HEIGHTS'));
        \DB::table('street_types')->insert(array('name' => 'HIGHWAY'));
        \DB::table('street_types')->insert(array('name' => 'JUNCTION'));
        \DB::table('street_types')->insert(array('name' => 'LINK'));
        \DB::table('street_types')->insert(array('name' => 'LOOP'));
        \DB::table('street_types')->insert(array('name' => 'MAIL'));
        \DB::table('street_types')->insert(array('name' => 'MEWS'));
        \DB::table('street_types')->insert(array('name' => 'PARK'));
        \DB::table('street_types')->insert(array('name' => 'PACKET'));
        \DB::table('street_types')->insert(array('name' => 'PARKWAY'));
        \DB::table('street_types')->insert(array('name' => 'POINT'));
        \DB::table('street_types')->insert(array('name' => 'PROMENADE'));
        \DB::table('street_types')->insert(array('name' => 'QUAY'));
        \DB::table('street_types')->insert(array('name' => 'RIDGE'));
        \DB::table('street_types')->insert(array('name' => 'RESERVE'));
        \DB::table('street_types')->insert(array('name' => 'RIDGEWAY'));
        \DB::table('street_types')->insert(array('name' => 'RISE'));
        \DB::table('street_types')->insert(array('name' => 'ROADS'));
        \DB::table('street_types')->insert(array('name' => 'ROW'));
        \DB::table('street_types')->insert(array('name' => 'SQUARE'));
        \DB::table('street_types')->insert(array('name' => 'STRIP'));
        \DB::table('street_types')->insert(array('name' => 'TAM'));
        \DB::table('street_types')->insert(array('name' => 'TERRACE'));
        \DB::table('street_types')->insert(array('name' => 'THOROUGHFARE'));
        \DB::table('street_types')->insert(array('name' => 'TRACK'));
        \DB::table('street_types')->insert(array('name' => 'TRUNK-WAY'));
        \DB::table('street_types')->insert(array('name' => 'VIEW'));
        \DB::table('street_types')->insert(array('name' => 'VISTA'));
        \DB::table('street_types')->insert(array('name' => 'WALK'));
        \DB::table('street_types')->insert(array('name' => 'WAY'));
        \DB::table('street_types')->insert(array('name' => 'WALKWAY'));
        \DB::table('street_types')->insert(array('name' => 'YARD'));
    }
}
