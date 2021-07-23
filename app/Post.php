<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;
use Carbon\Carbon;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $guarded = ['created_at', 'updated_at'];

    protected $dates = [
        'published_at',
    ];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

}
