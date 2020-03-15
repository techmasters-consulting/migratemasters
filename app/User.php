<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use QCod\ImageUp\HasImageUploads;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, SoftDeletes, Notifiable, HasImageUploads ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone','visa_for'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function tasks(){
        return $this->hasMany(Task::class);
    }
//    public function roles() {
//        return $this->hasOne(Role::class,'role_id');
//    }

    public function userProfile() {
        return $this->hasOne(UserProfile::class,'user_id');
    }

    public function userEducation() {
        return $this->hasOne(UserEducation::class,'user_id');
    }

    public function userWork() {
        return $this->hasOne(UserWork::class,'user_id');
    }
    public function userEducationHistory() {
        return $this->hasMany(UserEducationHistory::class,'user_id');
    }

    public function userWorkExperience() {
        return $this->hasMany(UserWorkExperience::class,'user_id');
    }
    public function userDependants() {
        return $this->hasMany(UserDependant::class,'user_id');
    }
    public function userFinancialPlan() {
        return $this->hasOne(UserFinancialPlan::class,'user_id');
    }
    public function userBackgroundInfo() {
        return $this->hasOne(UserBackgroundInfo::class,'user_id');
    }
}
