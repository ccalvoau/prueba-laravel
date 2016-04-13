<?php

namespace Novus\Http\Requests\Cleaner;

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
        return [
            //
        ];
    }
}
