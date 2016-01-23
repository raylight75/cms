<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'productsize';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'product_id',
        'size_id',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */

    public $timestamps = false;

    public function sizes()
    {
        return $this->belongsToMany('App\Product');
    }
}