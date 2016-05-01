<?php

namespace Novus;

class PaymentInfo extends MyBaseModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'payment_infos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cleaner_id',
        'bank_id',
        'bsb',
        'account_number',
        'description',
        'is_default',
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
    public function cleaner()
    {
        return $this->belongsTo(Cleaner::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }

    /**
     * Set the variable is_default into False before create new Payment Information
     *
     * @param $cleaner_id
     */
    public function setDefaultToFalse($cleaner_id)
    {
        // Updating is_default given a Cleaner
        PaymentInfo::where('cleaner_id', $cleaner_id)
            ->where('is_default', 'true')
            ->update(['is_default' => false]);
    }
}