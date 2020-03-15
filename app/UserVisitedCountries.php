<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserVisitedCountries extends Model
{
    protected $fillable = ['user_id','year', 'duration', 'country'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
