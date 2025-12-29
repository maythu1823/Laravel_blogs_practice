<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Post extends Model
{
    //
  public function user() {
    return $this->belongsTo(User::class);
}
    public function likers()
{
    return $this->belongsToMany(User::class, 'post_user_likes')->withTimestamps();
}

}
