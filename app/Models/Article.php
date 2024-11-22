<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    //
    protected $keyType = "string";
    public $incrementing = false;
    protected $fillable = ['author_id', 'title', 'content', 'slug'];

    public static function boot() {
        parent::boot();
        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
        });
    }

    public function author() {
        return $this->belongsTo(Author::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function linkes() {
        return $this->morphMany(Like::class,'likeable');
    }
}
