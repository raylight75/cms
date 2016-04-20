<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'orders';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'user_id',
        'order_date',
        'status',
        'product_id',
        'size',
        'img',
        'color',
        'quantity',
        'amount',

    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */

    public $timestamps = false;

    public function products()
    {
        return $this->hasOne('App\Models\Product', 'product_id', 'product_id');
    }
}