<?php

namespace Novus\Http\Requests\Place;

use Illuminate\Routing\Route;
use Novus\Http\Requests\Request;

class EditPlaceRequest extends Request
{
    /**
     * EditPlaceRequest constructor.
     */
    public function __construct(Route $route)
    {
        $this->route = $route;
    }

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
            'description' => 'max:255',
            'status' => 'required|in:TRUE,FALSE',
        ];
    }
}