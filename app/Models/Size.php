<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sizes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    //protected $primaryKey = 'size_id';

    protected $fillable = [
        'size',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */

    public $timestamps = false;

    /**
     * count sizes
     * @return mixed
     */
    public function sizeCount()
    {
        return $this->hasOne('App\Models\Products_sizes')
            ->selectRaw('size_id, count(*) as aggregate')
            ->groupBy('size_id');
    }
}