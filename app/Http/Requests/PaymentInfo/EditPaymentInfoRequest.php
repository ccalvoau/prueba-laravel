<?php

namespace Novus\Http\Requests\PaymentInfo;

use Illuminate\Routing\Route;
use Novus\Http\Requests\Request;

class EditPaymentInfoRequest extends Request
{
    /**
     * EditPaymentInfoRequest constructor.
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
            'cleaner_id' => 'required|exists:cleaners,id',
            'bank_id' => 'required|exists:banks,id',
            'bsb' => 'required|min:6',
            'account_number' => 'required|min:6|max:10',
            'is_default' => 'required|in:true,false',
        ];
    }
}