<?php

namespace Novus;

class UsuarioProfile extends MyBaseModel
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'usuario_profiles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['usuario_id', 'facebook', 'twitter', 'description'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function usuario() {
        return $this->belongsTo(Usuario::Class);
    }
}