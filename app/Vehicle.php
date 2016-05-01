<?php

namespace Novus;

use Carbon\Carbon;

class Vehicle extends MyBaseModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'vehicles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'registration_no',
        'vin',
        'engine_no',
        'make',
        'colour',
        'type',
        'year',
        'plate',
        'registration_expire',
        'owner',
        'vehicle_picture',
        'description',
        'status',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    /**
     * @return int|string
     */
    public function getAgeAttribute()
    {
        return Carbon::parse(Carbon::createFromFormat('Y', $this->year))->age;
    }

    /**
     * @return int|string
     */
    public function getExpireAttribute()
    {
        return Carbon::createFromFormat('Y-m-d', $this->registration_expire)->format('d/m/Y');
    }

    /**
     * @return int|string
     */
    public function isExpired()
    {
        return Carbon::createFromFormat('Y-m-d', $this->registration_expire)->lte(Carbon::now());
    }

    /**
     * Get the option list to populate the selects in the Forms
     *
     * @return mixed
     */
    public function getSelectList()
    {
        // Searching for the data to populate the Form
        $option_list = Vehicle::where('status', true)->get()->pluck('plate', 'id');
        // Adding default option to the list
        $option_list = $this->addSelectAnOption($option_list);
        return $option_list;
    }
}