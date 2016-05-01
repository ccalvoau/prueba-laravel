<?php

namespace Novus\Http\Requests\Team;

use Novus\Http\Requests\Request;

class CreateTeamRequest extends Request
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
            'alias' => 'required|alpha|unique:teams,alias',
            'leader' => 'required|exists:cleaners,id',
            'cleaners' => 'required|exists:cleaners,id',
            'h_cleaner_id2' => 'required|exists:cleaners,id',
            'h_cleaner_id3' => 'exists:cleaners,id',
            'h_cleaner_id4' => 'exists:cleaners,id',
            'h_cleaner_id5' => 'exists:cleaners,id',
            'h_cleaner_id6' => 'exists:cleaners,id',
            'vehicle_id' => 'exists:vehicles,id',
            'description' => 'max:255',
        ];
    }
}
