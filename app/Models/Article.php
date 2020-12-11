<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function patch()
    {
        return route('articles.show', this);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
        public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
//    public function user()
//    {
//        return $this->belongsTo(User::class, 'user_id');
//    }

}
