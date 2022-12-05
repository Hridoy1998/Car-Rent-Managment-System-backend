<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class RentPost extends Model
{
    use HasFactory;
    public function rent_post_user()
    {
        return $this->hasMany(User::class);
    }
}
