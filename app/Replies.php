<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Replies extends Model
{
    //

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function thread() {
        return $this->belongsTo(Threads::class);
    }
}
