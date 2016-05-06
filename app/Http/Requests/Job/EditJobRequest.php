<?php

namespace Novus\Http\Requests\Job;

use Illuminate\Routing\Route;
use Novus\Http\Requests\Request;

class EditJobRequest extends Request
{
    /**
     * EditClientRequest constructor.
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
            'client_type_id' => 'required|exists:client_types,id',
            'place_id' => 'required|exists:places,id',
            'team_id' => 'required|exists:teams,id',
        ];
    }
}
