<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Reply extends Model
{
    //
    protected $keyType = "string";
    public $incrementing = false;
    protected $fillable = ['comment_id', 'user_id', 'content'];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = (string) Str::uuid(); // Generate UUID when creating a new reply
        });
    }

    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }

    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }
}
