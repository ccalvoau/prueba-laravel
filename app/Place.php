<?php

namespace Novus;

class Place extends MyBaseModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'places';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'client_id',
        'unit_number',
        'street_number',
        'street_name',
        'street_type_id',
        'suburb',
        'state_id',
        'postcode',
        'reference',
        'status',
        'verified',
        'latitude',
        'longitude',
        'cleaner_id',
        'no_jobs',
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
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function streetType()
    {
        return $this->belongsTo(StreetType::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function state()
    {
        return $this->belongsTo(State::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cleaner()
    {
        return $this->belongsTo(Cleaner::class);
    }

    /**
     * Get the option list to populate the selects in the Forms
     *
     * @return mixed
     */
    public function getAddressAttribute()
    {
        $address = "";
        ($this->unit_number != '') ? $address = $address.$this->unit_number : $address;
        ($this->street_number != '') ? $address = $address.', '.$this->street_number : $address;
        ($this->street_name != '') ? $address = $address.' '.$this->street_name : $address;
        ($this->street_type_id != '') ? $address = $address.' '.$this->streetType->name : $address;
        ($this->suburb != '') ? $address = $address.', '.$this->suburb : $address;
        ($this->state_id != '') ? $address = $address.', '.$this->state->name : $address;
        ($this->postcode != '') ? $address = $address.', '.$this->postcode : $address;
        return $address;
    }

    public function getAddressVerifiedAttribute()
    {
        $address = $this->getAddressAttribute();
        ($this->verified) ? $address = $address.' - ('.\Lang::get('validation.attributes.place.verified').')' : $address;
        return $address;
    }
    
    /**
     * Get the option list to populate the selects in the Forms
     *
     * @return mixed
     */
    public function getSelectListByClientId($client_id)
    {
        // Searching for the data to populate the Form
        $option_list = Place::where('client_id', $client_id)->get()->pluck('address_verified', 'id');
        // Adding default option to the list
        $option_list = $this->addSelectAnOption($option_list);
        return $option_list;
    }
}