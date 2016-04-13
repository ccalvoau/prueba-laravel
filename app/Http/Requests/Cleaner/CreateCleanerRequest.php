<?php

namespace Novus\Http\Requests\Cleaner;

use Novus\Http\Requests\Request;

class CreateCleanerRequest extends Request
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
            'id_number' => 'required|alpha_num',
            'document_id' => 'required|exists:documents,id',
            'first_name1' => 'required|alpha',
            'first_name2' => 'alpha',
            'last_name1' => 'required|alpha',
            'last_name2' => 'alpha',
            'gender' => 'required|in:F,M',
            'birthday' => 'required|before:' . $dt . '',
            'phone_number' => 'required|unique:cleaners,phone_number',
            'email' => 'required|email|unique:cleaners,email',
        ];
    }
}