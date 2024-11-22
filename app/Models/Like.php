<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    //
    protected $keyType = 'string'; // Use string for UUIDs
    public $incrementing = false; // Disable auto-incrementing
    protected $fillable = ['likeable_id', 'likeable_type', 'user_id'];

    public function likeable()
    {
        return $this->morphTo();
    }
}
