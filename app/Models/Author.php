<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Author extends Model
{
    //
    protected $keyType = "string";
    public $incrementing = false;
    protected $fillable = ['name', 'email', 'bio'];

    public static function boot() {
        parent::boot();
        static::creating(function($model) {
            $model->id = (string) Str::uuid();
        });
    }

    public function artilces() {
        return $this->hasMany(Article::class);
    }
}
