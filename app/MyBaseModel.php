<?php

namespace Novus;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Lang;
use Intervention\Image\Facades\Image;

abstract class MyBaseModel extends Model
{
    /**
     * @param $field
     * @return null
     */
    public function nullIfBlank($field)
    {
        return trim($field) !== '' ? $field : null;
    }

    public function nullIfBlankUpperCase($field)
    {
        return trim($field) !== '' ? strtoupper($field) : null;
    }

    public function zeroIfBlank($field)
    {
        return trim($field) !== '' ? $field : 0;
    }

    public function cleanInputMask($field)
    {
        return str_replace('_', '', trim($field));
    }
    
    public function convertDateDBToView($date)
    {
        return $this->convertDate($date, 'Y-m-d', 'd/m/Y');
        //return Carbon::createFromFormat('Y-m-d', $date)->format('d/m/Y');
        //$usuario->birthday = $usuario->convertDate($usuario->birthday, 'Y-m-d', 'd/m/Y');
    }

    public function convertDateViewToDB($date)
    {
        return $this->convertDate($date, 'd/m/Y', 'Y-m-d');
    }

    /**
     * @param $date
     * @param $format_input
     * @param $format_output
     * @return string
     */
    public function convertDate($date, $format_input, $format_output)
    {
        return Carbon::createFromFormat($format_input, $date)->format($format_output);
    }

    /**
     * Add the default option to a select list
     * 
     * @param $array
     * @return mixed
     */
    public function addSelectAnOption($array){
        // Adding default option to the list
        $array = array_add($array, '', Lang::get('validation.attributes.select_an_option'));
        return $array;
    }

    /**
     * Save a picture into the public folder
     * 
     * @param $request
     * @param $picture
     * @param $size_x
     * @param $size_y
     * @param $folder
     * @param string $default
     * @return string
     */
    public function savePicture($request, $picture, $size_x, $size_y, $folder, $default = 'default.jpg')
    {
        $picture_name = $default;

        // Generating the name of profile picture
        if($request->file($picture) !== null)
        {
            if( $picture_name == 'default.jpg')
            {
                $picture_name = str_random(27).'.'.$request->file($picture)->getClientOriginalExtension();
            }

            // Read the picture from temporary file
            $img = Image::make($_FILES[$picture]['tmp_name']);
            // Resize the picture instance
            $img->fit($size_x, $size_y);
            // Save picture in desired format and location
            $img->save('assets/img/'.$folder.'/'.$picture_name);
        }
        return $picture_name;
    }

    /**
     * Display the Map of the Place given its coordinates
     *
     * @param $latitude
     * @param $longitude
     * @param $verified
     * @return $map
     */
    public function displayMap($latitude, $longitude, $verified)
    {
        // GoogleMaps API Key
        //AIzaSyDvAHxHd_M4LDIkCRmNJdxjNgeBkroQcw8

        // Setting the map configuration
        $config = array();
        $config['center'] = $latitude.', '.$longitude;
        $config['zoom'] = '18';
        $config['zoomControlStyle'] = 'LARGE';
        //$config['map_types_available'] = ['ROADMAP','SATELLITE'];
        $config['disableStreetViewControl'] = true;
        $config['disableMapTypeControl'] = true;

        // Initialize the Map
        \Gmaps::initialize($config);

        // Creating the marker
        $marker = array();
        $marker['position'] = $latitude.', '.$longitude;
        if($verified)
        {
            $marker['infowindow_content'] = Lang::get('validation.attributes.place.location_verified');
        }
        else
        {
            $marker['infowindow_content'] = Lang::get('validation.attributes.place.location_not_verified');
        }
        $marker['icon'] = '/assets/img/novus20.png';
        $marker['title'] = 'Place';
        $marker['animation'] = 'DROP';

        // Adding the marker
        \Gmaps::add_marker($marker);

        // Creating the Map
        return \Gmaps::create_map();
    }
}