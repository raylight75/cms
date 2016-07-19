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

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $primaryKey = 'product_id';

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
        return $this->belongsTo('App\Models\Order', 'product_id', 'product_id');
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

    /**
     * Scope a query to latest users.
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeLatest($query)
    {
        return $query->orderBy('product_id', 'desc')
            ->take('6')
            ->get();
    }

    /**
     * Scope a query to 6 per page.
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function scopeProducts($query)
    {
        return $query->with('category')
            ->orderBy('product_id', 'desc')
            ->get()
            ->random(6);
    }

    /**
     * Scope a query for property of the Items.
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeItemProperty($query, $id)
    {
        return $query->with('category', 'size', 'color')->findOrFail($id);
    }

    /**
     * Get parent items for colors and sizes
     * @param $query
     * @param $parent
     * @return mixed
     */
    public function scopeGetParents($query, $parent)
    {
        return $query->where(['parent_id' => $parent])
            ->lists('product_id');
    }
}