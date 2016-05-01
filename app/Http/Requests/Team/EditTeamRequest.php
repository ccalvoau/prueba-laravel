<?php

namespace Novus\Http\Requests\Team;

use Illuminate\Routing\Route;
use Novus\Http\Requests\Request;

class EditTeamRequest extends Request
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
            'alias' => 'required|alpha|unique:teams,alias,'.$this->route->getParameter('id'),
            'leader' => 'required|exists:cleaners,id',
            'h_cleaner_id2' => 'required|exists:cleaners,id',
            'h_cleaner_id3' => 'exists:cleaners,id',
            'h_cleaner_id4' => 'exists:cleaners,id',
            'h_cleaner_id5' => 'exists:cleaners,id',
            'h_cleaner_id6' => 'exists:cleaners,id',
            'vehicle_id' => 'exists:vehicles,id',
            'description' => 'max:255',
            'status' => 'required|in:TRUE,FALSE',
        ];
    }
}
