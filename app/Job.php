<?php

namespace Novus;

use Carbon\Carbon;

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

    public function getJobDateViewAttribute()
    {
        return Carbon::createFromFormat('Y-m-d', $this->job_date)->format('d/m/Y');
    }

    public function getJobTimeViewAttribute()
    {
        return Carbon::createFromFormat('H:i:s', $this->job_time)->format('H:i');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function clientType()
    {
        return $this->belongsTo(ClientType::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function place()
    {
        return $this->belongsTo(Place::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function statusJob()
    {
        return $this->belongsTo(StatusJob::class);
    }


    public function getJobsByClientAndPlaceId($client_id, $place_id)
    {
        $jobs = Job::where('client_id', $client_id)->where('place_id', $place_id)->orderBy('job_date', 'desc')->get();

        $data = null;
        foreach ($jobs as $job) {
            //dd($job->team);
            $data[$job->id] = [
                'job_date' => $job->job_date_view,
                'job_time' => $job->job_time_view,
                'team_alias' => $job->team->alias,
                'leader_name' => $job->team->leaderData->full_name,
                'price' => $job->price,
                'no_hours' => $job->no_hours,
                'status_name' => $job->statusJob->name,
            ];
        }
        return $data;
    }
}