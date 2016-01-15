<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Input;

class CreateProduct extends Request
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
            'slug' => 'required',
            'name' => 'required',
            'description' => 'required',
            'a_img' => 'required',
            'brand_id' => 'required',
            'cat_id' => 'required',
            'quantity' => 'required',
            'price' => 'required',
        ];
    }
}
