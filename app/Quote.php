<?php

namespace Novus;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'quote';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cleaner_id',
        'quote_date',
        'price',
        'description',
        'accepted',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
