<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // Relationship with likes
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
