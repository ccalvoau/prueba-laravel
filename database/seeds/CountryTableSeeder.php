<?php

use Illuminate\Database\Seeder;
use Webpatser\Countries\Countries;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Get all of the countries
        $country_instance = new Countries();
        $countries = $country_instance->getList();
        
        foreach ($countries as $countryId => $country){
            DB::table(\Config::get('countries.table_name'))->insert(array(
                'id' => $countryId,
                'capital' => ((isset($country['capital'])) ? strtoupper($country['capital']) : null),
                'citizenship' => ((isset($country['citizenship'])) ? strtoupper($country['citizenship']) : null),
                'country_code' => $country['country-code'],
                'currency' => ((isset($country['currency'])) ? $country['currency'] : null),
                'currency_code' => ((isset($country['currency_code'])) ? $country['currency_code'] : null),
                'currency_sub_unit' => ((isset($country['currency_sub_unit'])) ? $country['currency_sub_unit'] : null),
                'full_name' => ((isset($country['full_name'])) ? strtoupper($country['full_name']) : null),
                'iso_3166_2' => $country['iso_3166_2'],
                'iso_3166_3' => $country['iso_3166_3'],
                'name' => strtoupper($country['name']),
                'region_code' => $country['region-code'],
                'sub_region_code' => $country['sub-region-code'],
                'eea' => (bool)$country['eea'],
                'calling_code' => $country['calling_code'],
                'currency_symbol' => ((isset($country['currency_symbol'])) ? $country['currency_symbol'] : null),
                'flag' =>((isset($country['flag'])) ? $country['flag'] : null),
            ));
        }
    }
}