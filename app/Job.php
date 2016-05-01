<?php

namespace Novus;

class Job extends MyBaseModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'jobs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'client_id',
        'client_type_id',
        'place_id',
        'team_id',
        'quote_id',
        'job_date',
        'job_time',
        'description',
        'status_job_id',
        'no_hours',
        'price',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}