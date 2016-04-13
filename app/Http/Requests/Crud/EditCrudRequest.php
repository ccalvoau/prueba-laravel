<?php

namespace Novus\Http\Requests\Crud;

use Carbon\Carbon;
use Novus\Http\Requests\Request;

class EditCrudRequest extends Request
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
        $dt = Carbon::now()->subYears(18);

        return [
            'first_name' => 'required|alpha',
            'last_name' => 'required|alpha',
            'birthday' => 'required|before:'.$dt,
            'status' => 'required|in:A,I',
            'facebook' => 'required|alpha_num',
            'twitter' => 'required|alpha_num',
        ];
    }
}
