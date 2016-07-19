<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'brands';

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
        return $this->belongsTo('App\Models\Product','brand_id', 'brand_id');
    }

    /**
     * Count brands
     * @return mixed
     */
    public function brandCount()
    {
        return $this->product()
            ->selectRaw('brand_id, count(*) as aggregate')
            ->groupBy('brand_id');
    }
}