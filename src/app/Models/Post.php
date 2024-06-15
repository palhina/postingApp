<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // 1対多なので、usersではなくuserと書く.
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
