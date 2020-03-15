<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class UserWorkExperience extends Model
{
    //
    protected $fillable = ['job_offer', 'company', 'job_title', 'starting_date'];

    public function user() {
        return $this->belongsTo(User::class);
    }

}
