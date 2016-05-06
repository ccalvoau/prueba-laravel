<?php

namespace Novus;

class Team extends MyBaseModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'teams';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'alias',
        'leader',
        'cleaner_id2',
        'cleaner_id3',
        'cleaner_id4',
        'cleaner_id5',
        'cleaner_id6',
        'vehicle_id',
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
    public function leaderData()
    {
        return $this->belongsTo(Cleaner::class, 'leader');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cleaner2()
    {
        return $this->belongsTo(Cleaner::class, 'cleaner_id2');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cleaner3()
    {
        return $this->belongsTo(Cleaner::class, 'cleaner_id3');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cleaner4()
    {
        return $this->belongsTo(Cleaner::class, 'cleaner_id4');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cleaner5()
    {
        return $this->belongsTo(Cleaner::class, 'cleaner_id5');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cleaner6()
    {
        return $this->belongsTo(Cleaner::class, 'cleaner_id6');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
    
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    /**
     * Get the option list to populate the selects in the Forms
     *
     * @return mixed
     */
    public function getSelectList()
    {
        // Searching for the data to populate the Form
        $option_list = Team::where('status', true)->get()->pluck('alias', 'id');
        // Adding default option to the list
        $option_list = $this->addSelectAnOption($option_list);
        return $option_list;
    }

    public function getLeaderByTeamId($id)
    {
        $team = Team::where('id', $id)->get()->first();
        return $team->leaderData->full_name;
    }
}