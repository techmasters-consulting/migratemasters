<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDependant extends Model
{
    //

    protected $fillable = ['name', 'age', 'relationship'];
    public function user() {
        return $this->belongsTo(User::class);
    }
}
