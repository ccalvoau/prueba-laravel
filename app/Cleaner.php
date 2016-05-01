<?php

namespace Novus;

use Carbon\Carbon as Carbon;

class Cleaner extends MyBaseModel
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
        'user_id',
        'id_number',
        'document_id',
        'first_name1',
        'first_name2',
        'last_name1',   
        'last_name2',
        'phone_number',
        'email',
        'gender',
        'date_of_birth',
        'country_id',
        'language_id',
        'english_level_id',
        'profile_picture',
        'tfn',
        'abn',
        'licence_no',
        'licence_picture',
        'own_vehicle',
        'no_jobs',
        'no_hours',
        'profit',
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function availability()
    {
        return $this->belongsTo(Availability::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paymentInfo()
    {
        return $this->hasMany(PaymentInfo::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function englishLevel()
    {
        return $this->belongsTo(EnglishLevel::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function team()
    {
        return $this->belongsTo(Team::class);
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
    public function getNameAttribute()
    {
        if( isset($this->first_name2) ) {
            if ( isset($this->last_name2) ) {
                return $this->first_name1 . " " . $this->first_name2 . " " . $this->last_name1 . " " . $this->last_name2;
            } else {
                return $this->first_name1 . " " . $this->first_name2 . " " . $this->last_name1;
            }
        }
        else
        {
            if ( isset($this->last_name2) )
            {
                return $this->first_name1 . " " . $this->last_name1 . " " . $this->last_name2;
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
        return Carbon::parse(Carbon::createFromFormat('Y-m-d', $this->date_of_birth))->age;
    }

    /**
     * @return int|string
     */
    public function getDobAttribute()
    {
        return Carbon::createFromFormat('Y-m-d', $this->date_of_birth)->format('d/m/Y');
    }

    /**
     * Get the option list to populate the selects in the Forms
     *
     * @return mixed
     */
    public function getSelectList()
    {
        // Searching for the data to populate the Form
        $option_list = Cleaner::where('status', true)->get()->pluck('full_name', 'id');
        // Adding default option to the list
        $option_list = $this->addSelectAnOption($option_list);
        return $option_list;
    }

    /**
     * Get the option list to populate the selects in the Forms
     *
     * @return mixed
     */
    public function getSelectListNoDefault()
    {
        // Searching for the data to populate the Form
        return Cleaner::where('status', true)->get()->pluck('full_name', 'id');
    }

    /**
     * Get the option list to populate the selects in the Forms
     *
     * @return mixed
     */
    public function getSelectListTeam($id1,$id2,$id3,$id4,$id5)
    {
        // Searching for the data to populate the Form
        $option_list = Cleaner::where('status', true)->whereNotIn('id', [$id1,$id2,$id3,$id4,$id5])->get()->pluck('full_name', 'id');
        // Adding default option to the list
        $option_list = $this->addSelectAnOption($option_list);
        return $option_list;
    }

    /**
     * Get the cleaner ID given a user ID when the role is Leader or Cleaner
     *
     * @param $user_id
     * @return mixed
     */
    public function getCleanerUserId($user_id)
    {
        return Cleaner::where('user_id', $user_id)->get()->first();
    }


    public function getProfilePictureById($id)
    {
        $cleaner = Cleaner::select('profile_picture')->where('id', $id)->get()->first();
        return $cleaner->profile_picture;
    }

    public function getCleanerIdByUserId($id)
    {
        $cleaner = Cleaner::select('id')->where('user_id', $id)->get()->first();
        return $cleaner->id;
    }



    /**
     * Update a Cleaner who has been set as Admin as User
     * 
     * @param $user_id
     */
    public function updateCleanerToAdmin($user_id)
    {
        Cleaner::where('user_id', $user_id)
            ->update(['status' => false]);
    }

    /**
     * Update a Cleaner who has been set as Cleaner or Leader as User
     * 
     * @param $email
     * @param $user_id
     */
    public function updateCleanerUserId($email, $user_id)
    {
        Cleaner::where('email', $email)
            ->where('user_id', 0)
            ->update(['user_id' => $user_id, 'status' => false]);
    }

    public function validateCleaner($email)
    {
        Cleaner::where('email', $email)
            ->update(['status' => true]);
    }
}