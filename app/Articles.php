<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Articles extends Model
{

    use \Spatie\Tags\HasTags;
    //
    protected $fillable = ['title', 'body', 'slug'];

    public function user() {
        return $this->belongsTo(User::class);
    }

//    public function tags() {
//        return $this->belongsToMany(Tags::class);
//    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($articles) {
            if ( !$articles->user_id ) {
                $articles->user_id = Auth::id();
            }
        });
    }
    protected $casts = [
        'published_at' => 'datetime',
    ];
}
