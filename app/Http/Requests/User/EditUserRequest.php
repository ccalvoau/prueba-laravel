<?php

namespace Novus\Http\Requests\User;

use Illuminate\Routing\Route;
use Novus\Http\Requests\Request;

class EditUserRequest extends Request
{
    /**
     * EditUserRequest constructor.
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
            'first_name' => 'required|max:16',
            'last_name' => 'required|max:16',
            'email' => 'required|email|max:32|unique:users,email,'.$this->route->getParameter('id'),
            'profile_picture' => 'image|mimes:jpeg,jpg,png|max:1024*1024*1',
            'role_id' => 'required|exists:roles,id',
            'description' => 'max:255',
            'status' => 'required|in:TRUE,FALSE',
        ];
    }
}