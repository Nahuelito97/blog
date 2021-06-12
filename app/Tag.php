<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tag extends Model
{
    protected $guarded = ['created_at', 'updated_at', 'deleted_at'];

    public function posts(){
        return $this->belongsToMany(Post::class);
    }

    public function my_store($request)
    {

        self::create([
            'name' => $request->name,
            'description' => $request->description,
            'slug' => Str::slug($request->name, '_'),
        ]);
    }

    public function my_update($request)
    {
        $this->update([
            'name' => $request->name,
            'description' => $request->description,
            'slug' => Str::slug($request->name, '_'),
        ]);
    }
}
