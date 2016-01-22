<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'slug',
        'name',
        'description',
        'a_img',
        'b_img',
        'c_img',
        'brand_id',
        'cat_id',
        'quantity',
        'price'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */

    public $timestamps = false;

    public function brands()
    {
        return $this->hasOne('App\Brands', 'brand_id', 'brand_id');
    }
}