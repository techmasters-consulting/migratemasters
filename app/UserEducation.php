<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserEducation extends Model
{
    //
    protected $fillable = ['admission_offer', 'school', 'course', 'starting_date'];


    public function user() {
        return $this->belongsTo(User::class);
    }
}
