<?php

namespace Novus;

class Usuario extends MyBaseModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'usuarios';

    //protected $dates = ['birthday'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name', 'last_name', 'birthday', 'status'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuarioProfile() {

        return $this->hasOne(UsuarioProfile::class);
    }

    /**
     * @return string
     */
    public function getFullNameAttribute() {
        return $this->first_name." ".$this->last_name;
    }

    /**
     * @return string
     */
    public function getStatusNameAttribute() {
        ($this->status == 'A') ? $status = 'ACTIVE' : $status = 'INACTIVE';
        return $status;
    }

    /**
     * @return int
     */
    public function getAgeAttribute() {
        return \Carbon\Carbon::parse($this->birthday)->age;
    }


    /**
     * @return string
     */
    public function getBodAttribute() {
        return $this->convertDateDBToView($this->birthday);
    }
}