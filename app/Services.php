<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


use Illuminate\Database\Eloquent\SoftDeletes;

class Services extends Model
{
    use SoftDeletes;
    use \Spatie\Tags\HasTags;
    protected $fillable = ['name', 'category_id', 'user_id', 'order'];

    public function category() {
        return $this->hasOne(Category::class);
    }
    protected $casts = [
        'published_at' => 'datetime',
    ];

//    public function user() {
//        return $this->belongsTo(User::class);
//    }
}
