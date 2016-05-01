<?php

namespace Novus\Http\Requests\Vehicle;

use Novus\Http\Requests\Request;
use Carbon\Carbon;

class CreateVehicleRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $dt = Carbon::now();

        return [
            'registration_no' => 'required|alpha_num|unique:vehicles,registration_no',
            'vin' => 'required|alpha_num',
            'engine_no' => 'required|alpha_num',
            'make' => 'required|alpha_num',
            'colour' => 'required|alpha_num',
            'type' => 'required|alpha_num',
            'year' => 'required|numeric',
            'plate' => 'required|alpha_num',
            'registration_expire' => 'required|date|after:' . $dt . '',
            'owner' => 'required',
            'vehicle_picture' => 'image|mimes:jpeg,jpg,png|max:1024*1024*1',
            'description' => 'max:255',
        ];
    }
}