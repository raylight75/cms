<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Psize extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'size';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $primaryKey = 'size_id';

    protected $fillable = [
        'size',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */

    public $timestamps = false;
}