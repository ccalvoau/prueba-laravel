<?php

namespace Novus;

use Illuminate\Database\Eloquent\Model;

class ClientType extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'client_types';

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
    public function client()
    {
        return $this->hasMany(Client::class);
    }
}
