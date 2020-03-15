<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserWork extends Model
{
    //
    protected $fillable = ['got_job', 'company', 'job_title', 'professional_certifications','skill_sets'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
