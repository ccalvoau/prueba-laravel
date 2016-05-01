<?php

namespace Novus\Http\Requests\Cleaner;

use Illuminate\Routing\Route;
use Novus\Http\Requests\Request;

class EditAvailabilityRequest extends Request
{
    /**
     * EditCleanerRequest constructor.
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
            'h_timetable' => 'required|size:839',
            'h_is_available' => 'required|in:true',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'h_is_available.in' => \Lang::get('validation.attributes.availability.is_available'),
        ];
    }
}