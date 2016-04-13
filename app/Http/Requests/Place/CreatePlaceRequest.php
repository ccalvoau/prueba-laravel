<?php

namespace Novus\Http\Requests\Place;

use Novus\Http\Requests\Request;

class CreatePlaceRequest extends Request
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
        return [
            'client_id' => 'required|exists:clients,id',
            'unit_number' => 'required|numeric',
            'street_number' => 'required|numeric',
            'street_name' => 'required|alpha',
            'street_type_id' => 'required|exists:street_types,id',
            'suburb' => 'required|alpha',
            'state_id' => 'required|exists:states,id',
        ];
    }
}
