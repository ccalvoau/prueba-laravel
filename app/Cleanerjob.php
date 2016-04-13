<?php

namespace Novus;

use Illuminate\Database\Eloquent\Model;

class Cleanerjob extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cleanerjobs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cleaner_id',
        'job_id',
        'place_id',
        'job_date',
        'no_hours',
        'amount',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
