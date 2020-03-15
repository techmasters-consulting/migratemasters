<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserBackgroundInfo extends Model
{
    //
    protected $fillable = [ 
                'familytuberculosis',
                'mentaldisorder',
                'moreinfomedical',
                'beyondvalidity',
                'refusedentry',
                'previousapplication',
                'moreinfovisa',
                'policecertificate',
                'criminaloffence',
                'moreinfocriminal',
                'courtproceduresabroad',
                'courtprocedureshome',
                'moreinfocourt',];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
