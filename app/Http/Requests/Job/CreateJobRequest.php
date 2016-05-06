<?php

namespace Novus\Http\Requests\Job;

use Carbon\Carbon;
use Novus\Http\Requests\Request;

class CreateJobRequest extends Request
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
            'client_id' => 'required|exists:clients,id',
            'client_type_id' => 'required|exists:client_types,id',
            'place_id' => 'required|exists:places,id',
            'team_id' => 'required|exists:teams,id',
            'job_date' => 'required|date|after:' . $dt . '',
            'job_time' => 'required|date_format:H:i',
        ];
    }
}
