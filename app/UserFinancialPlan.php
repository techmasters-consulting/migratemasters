<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFinancialPlan extends Model
{
    //
    protected $fillable = ['sponsor', 'budget'];


    public function user() {
        return $this->belongsTo(User::class);
    }
}
