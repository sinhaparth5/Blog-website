<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Comment extends Model
{
    //
    protected $keyType = "string";
    public $incrementing = false;
    protected $fillable = ['article_id', 'user_id', 'content'];

    public static function boot() {
        parent::boot();
        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
        });
    }

    public function article() {
        return $this->belongsTo(Article::class);
    }

    public function replies() {
        return $this->hasMany(Reply::class);
    }

    public function likes() {
        return $this->morphMany(Like::class,'likeable');
    }
}
