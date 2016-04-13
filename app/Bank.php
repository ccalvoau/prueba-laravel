<?php

namespace Novus;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'banks';

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
    public function paymentInfo()
    {
        return $this->hasMany(PaymentInfo::class);
    }
}
