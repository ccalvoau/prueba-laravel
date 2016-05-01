<?php

namespace Novus\Http\Requests\Cleaner;

use Carbon\Carbon;
use Illuminate\Routing\Route;
use Novus\Http\Requests\Request;

class EditCleanerRequest extends Request
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
        $dt = Carbon::now()->subYears(18);

        return [
            'id_number' => 'required|alpha_num',
            'document_id' => 'required|exists:documents,id',
            'first_name1' => 'required|max:16',
            'first_name2' => 'max:16',
            'last_name1' => 'required|max:16',
            'last_name2' => 'max:16',
            'phone_number' => 'required|unique:cleaners,phone_number,'.$this->route->getParameter('id'),
            'email' => 'required|email|max:32|unique:cleaners,email,'.$this->route->getParameter('id'),
            'gender' => 'required|in:F,M',
            'date_of_birth' => 'required|date|before:' . $dt . '',
            'country_id' => 'required|exists:countries,id',
            'language_id' => 'required|exists:languages,id',
            'english_level_id' => 'required|exists:english_levels,id',
            'profile_picture' => 'image|mimes:jpeg,jpg,png|max:1024*1024*1',
            'tfn' => 'size:11|unique:cleaners,tfn,'.$this->route->getParameter('id'),
            'abn' => 'size:14|unique:cleaners,abn,'.$this->route->getParameter('id'),
            'licence_no' => 'alpha_num|max:16',
            'own_vehicle' => 'required|in:true,false',
            'licence_picture' => 'image|mimes:jpeg,jpg,png|max:1024*1024*1',
            'description' => 'max:255',
            'status' => 'required|in:TRUE,FALSE',
        ];
    }
}