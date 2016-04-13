<?php

namespace Novus;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'parts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'partcategory_id',
        'partid',
        'name',
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
