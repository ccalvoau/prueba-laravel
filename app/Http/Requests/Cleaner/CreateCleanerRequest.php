<?php

namespace Novus\Http\Requests\Cleaner;

use Carbon\Carbon;
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
            'first_name1' => 'required|max:16',
            'first_name2' => 'max:16',
            'last_name1' => 'required|max:16',
            'last_name2' => 'max:16',
            'phone_number' => 'required|unique:cleaners,phone_number',
            'email' => 'required|email|max:48|unique:cleaners,email',
            //'email' => 'required_if:h_create_user,false|unique:users,email',
            'gender' => 'required|in:F,M',
            'date_of_birth' => 'required|date|before:' . $dt . '',
            'country_id' => 'required|exists:countries,id',
            'language_id' => 'required|exists:languages,id',
            'english_level_id' => 'required|exists:english_levels,id',
            'profile_picture' => 'image|mimes:jpeg,jpg,png|max:1024*1024*1',
            'tfn' => 'unique:cleaners,tfn|size:11',
            'abn' => 'unique:cleaners,abn|size:14',
            'licence_no' => 'max:16',
            'own_vehicle' => 'required|in:true,false',
            'licence_picture' => 'image|mimes:jpeg,jpg,png|max:1024*1024*1',
            'description' => 'max:255',
        ];
    }
}