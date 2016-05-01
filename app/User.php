<?php

namespace Novus;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends MyBaseModel implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cleaner_id',
        'first_name',
        'last_name',
        'email',
        'validated',
        'password',
        'role_id',
        'profile_picture',
        'description',
        'status'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token'
    ];

    /**
     * @return string
     */
    public function getNameAttribute()
    {
        return $this->first_name . " " . $this->last_name;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Check if an User has any given Roles
     * 
     * @param $roles
     * @return bool
     */
    public function hasAnyRole($roles)
    {
        if(is_array($roles))
        {
            foreach($roles as $role)
            {
                if ($this->hasRole($role))
                {
                    return true;
                }
            }
        }
        else
        {
            if ($this->hasRole($roles))
            {
                return true;
            }
        }
        return false;
    }

    /**
     * Check if an User has a given Role
     * 
     * @param $role
     * @return bool
     */
    public function hasRole($role)
    {
        if ($this->role_id == $role)
        {
            return true;
        }
        return false;
    }

    /**
     * Set the variable validated into True after clicking the button in the welcome mail
     *
     * @param $email
     */
    public function validateEmail($email)
    {
        // Updating is_default given a Cleaner
        User::where('email', $email)
            ->where('validated', 'false')
            ->update(['validated' => true, 'status' => true]);
    }

    /**
     * Verify if a User is an Admin
     *
     * @return bool
     */
    public function isAdmin()
    {
        if($this->role_id == 1 || $this->role_id == 2)
        {
            return true;
        }
        return false;
    }

    /**
     * Verify if a User is not an Admin
     *
     * @return bool
     */
    public function isNotAdmin()
    {
        if($this->role_id == 3 || $this->role_id == 4)
        {
            return true;
        }
        return false;
    }

    /**
     * Get an User given an Email
     * 
     * @param $email
     * @return user
     */
    public function getUserByEmail($email)
    {
        return User::where('email', $email)->get()->first();
    }

    /**
     * Update a User who has been created as a Cleaner
     *
     * @param $cleaner_id
     * @param $email
     */
    public function updateCleanerIdByEmail($cleaner_id, $email)
    {
        User::where('email', $email)
            ->update(['cleaner_id' => $cleaner_id]);
    }

    /**
     * Update a User profile picture given an ID from Cleaner Update
     *
     * @param $id
     * @param $profile_picture
     */
    public function updateProfilePictureById($id, $profile_picture)
    {
        User::where('id', $id)
            ->update(['profile_picture' => $profile_picture]);
    }
}