<?php

namespace Novus;

class Role extends MyBaseModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'roles';

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
    public function user()
    {
        return $this->hasMany(User::class);
    }

    /**
     * Get the option list to populate the selects in the Forms
     *
     * @return mixed
     */
    public function getSelectList( $option )
    {
        // Searching for the data to populate the Form
        if($option == "ALL")
        {
            $option_list = Role::where('status', true)->get()->pluck('name', 'id');
        }
        else if($option == "ADMIN")
        {
            $option_list = Role::where('status', true)->whereNotIn('id', [3,4])->get()->pluck('name', 'id');
        }
        else if($option == "CLEANER")
        {
            $option_list = Role::where('status', true)->whereNotIn('id', [1,2])->get()->pluck('name', 'id');
        }
        // Adding default option to the list
        $option_list = $this->addSelectAnOption($option_list);
        return $option_list;
    }
}