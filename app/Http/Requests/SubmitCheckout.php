<?php

namespace App\Http\Requests;

class SubmitCheckout extends Request
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
            'country' => 'required',
            'city' => 'required',
            'postcode' => 'required|numeric',
            'adress' => 'required|max:255',
            'name' => 'required|max:255',
            'phone' => 'required|numeric',
            'email' => 'required|email|max:255',
            'delivery' => 'required',
            'payment' => 'required',
        ];
    }
}
