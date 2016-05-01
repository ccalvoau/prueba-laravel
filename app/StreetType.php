<?php

namespace Novus;

class StreetType extends MyBaseModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'street_types';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function place()
    {
        return $this->hasMany(Place::class);
    }

    /**
     * Get the option list to populate the selects in the Forms
     *
     * @return mixed
     */
    public function getSelectList()
    {
        // Searching for the data to populate the Form
        $option_list = StreetType::where('status', true)->get()->pluck('name', 'id');
        // Adding default option to the list
        $option_list = $this->addSelectAnOption($option_list);
        return $option_list;
    }
}