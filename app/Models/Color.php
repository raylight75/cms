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
    protected $table = 'colors';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    //protected $primaryKey = 'color_id';

    protected $fillable = [
        'color',
        'web',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */

    public $timestamps = false;

    /**
     * count colors
     * @return mixed
     */
    public function colorCount()
    {
        return $this->hasOne('App\Models\Colors_products')
            ->selectRaw('color_id, count(*) as aggregate')
            ->groupBy('color_id');
    }
}