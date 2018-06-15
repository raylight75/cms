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
            'country' => 'required', //autofilled dropdown
            'city' => 'required|alpha',
            'postcode' => 'required|numeric|integer|digits:4',
            'adress' => 'required|max:255',
            'name' => 'required|max:255', //name is autofilled
            'phone' => 'required|numeric|digits:9',
            'email' => 'required|email|max:255', //email is autofilled
            'delivery' => 'required', //autofilled dropdown
            'payment' => 'required', //autofilled dropdown
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'postcode.integer' => 'Please enter valid postcode number',
            'phone.digits' => 'The phone number must be 9 digits',
            'phone.numeric' => 'Use only digits in phone number',
        ];
    }
}
