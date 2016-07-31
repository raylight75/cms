<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;
use App\Repositories\OrderRepository;

class HasPermision extends Request
{
    protected  $order;

    public function __construct(OrderRepository $order)
    {
        $this->order = $order;
    }

    /**
     * Not used !!
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        $order = $this->order->getUserOrder($request);
        return Gate::denies('view-resource', $order);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

    }
}
