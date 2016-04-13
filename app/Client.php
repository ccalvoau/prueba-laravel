<?php

namespace Novus;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'clients';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name1',
        'first_name2',
        'last_name1',
        'last_name2',
        'client_type_id',
        'phone_number',
        'email',
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
    public function clientType()
    {
        return $this->belongsTo(ClientType::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function places()
    {
        return $this->hasMany(Place::class);
    }

    /**
     * @return string
     */
    public function getShortNameAttribute()
    {
        return $this->first_name1 . " " . $this->last_name1;
    }

    /**
     * @return string
     */
    public function getFullNameAttribute()
    {
        if( isset($this->first_name2) ) {
            if ( isset($this->last_name2) ) {
                return $this->first_name1 . " " . substr($this->first_name2, 0, 1) . " " . $this->last_name1 . " " . substr($this->last_name2, 0, 1);
            } else {
                return $this->first_name1 . " " . substr($this->first_name2, 0, 1) . " " . $this->last_name1;
            }
        }
        else
        {
            if ( isset($this->last_name2) )
            {
                return $this->first_name1 . " " . $this->last_name1 . " " . substr($this->last_name2, 0 ,1);
            }
            else
            {
                return $this->first_name1 . " " . $this->last_name1;
            }
        }
    }

    /**
     * @return string
     */
    public function getStatusNameAttribute()
    {
        ($this->status == 'A') ? $status = 'ACTIVE' : $status = 'INACTIVE';
        return $status;
    }
}