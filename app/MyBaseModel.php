<?php

namespace Novus;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

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
}
