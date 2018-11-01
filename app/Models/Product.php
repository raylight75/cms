<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */

    protected $table = 'products';

    //protected $primaryKey = 'product_id';

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     * Just example with singular name of the method
     */
    public function brands()
    {
        return $this->hasOne('App\Models\Brand', 'brand_id', 'brand_id');
    }

    public function category()
    {
        return $this->hasOne('App\Models\Category', 'cat_id', 'cat_id');
    }

    public function order()
    {
        return $this->belongsTo('App\Models\Order', 'product_id', 'id');
    }

    public function productsSizes()
    {
        return $this->hasMany('App\Models\Products_sizes');
    }

    public function size()
    {
        return $this->belongsToMany('App\Models\Size');
    }

    public function colorsProducts()
    {
        return $this->hasMany('App\Models\Colors_products');
    }

    public function color()
    {
        return $this->belongsToMany('App\Models\Color');
    }
}