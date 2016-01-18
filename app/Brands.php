<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'brand';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'brand_id';

    protected $fillable = [
        'brand_id',
        'brand',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */

    public $timestamps = false;

    public function product()
    {
        return $this->belongsTo('App\Product','brand_id', 'brand_id');
    }
}