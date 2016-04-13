<?php

namespace Novus;

use Illuminate\Database\Eloquent\Model;

class Quotehour extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'quotehours';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'partcategory_id',
        'partid',
        'size_id',
        'duration',
        'description',
        'status',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
