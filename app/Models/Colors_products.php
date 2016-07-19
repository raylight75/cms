<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Colors_products extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'color_product';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'product_id',
        'color_id',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */

    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
}