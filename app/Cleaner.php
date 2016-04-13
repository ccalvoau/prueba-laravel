<?php

namespace Novus;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Cleaner extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cleaners';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_number',
        'document_id',
        'first_name1',
        'first_name2',
        'last_name1',
        'last_name2',
        'gender',
        'birthday',
        'phone_number',
        'email',
        'tfn',
        'abn',
        'dlicence_no',
        'own_vehicle',
        'no_jobs',
        'no_hours',
        'amount_earned',
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
    public function document()
    {
        return $this->belongsTo(Document::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function place()
    {
        return $this->hasMany(Place::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paymentInfo()
    {
        return $this->hasMany(PaymentInfo::class);
    }

    /**
     * @return string
     */
    public function getIdeAttribute()
    {
        return $this->document->name. ": " .$this->id_number  ;
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
     * @return int|string
     */
    public function getAgeAttribute()
    {
        $age = date_diff(date_create($this->birthday), date_create('today'))->y;
        if( strlen($age) == 1 )
        {
            $age = "0" . $age;
        }
        return $age;
    }

    /**
     * @return int|string
     */
    public function getDobAttribute()
    {
        return Carbon::createFromFormat('Y-m-d', $this->birthday)->format('d/m/Y');
    }
}
