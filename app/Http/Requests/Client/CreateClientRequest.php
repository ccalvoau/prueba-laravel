<?php

namespace Novus\Http\Requests\Client;

use Novus\Http\Requests\Request;

class CreateClientRequest extends Request
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
            'client_type_id' => 'required|exists:client_types,id',
            'first_name1' => 'required|alpha',
            'first_name2' => 'alpha',
            'last_name1' => 'required|alpha',
            'last_name2' => 'alpha',
            'phone_number' => 'required|unique:clients,phone_number',
            'email' => 'required|email|unique:clients,email',
        ];
    }
}