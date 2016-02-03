<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'productcolour';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'product_id',
        'colour_id',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */

    public $timestamps = false;

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}