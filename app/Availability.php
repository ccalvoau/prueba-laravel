<?php

namespace Novus;

use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'availabilitys';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cleaner_id',
        'schedule',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
