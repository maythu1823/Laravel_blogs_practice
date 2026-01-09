<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Profile;
use App\Models\Post;
use App\Models\Post_user_like;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class User extends Authenticatable
{
    //
    use HasFactory;
    protected $guarded = ['id'];
    public function userToProfile()
    {
        return $this->hasOne(Profile::class);
    }
   
     public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function likedPosts()
{
    return $this->belongsToMany(Post::class, 'post_user_likes')->withTimestamps();
}
public function latestCommentThroughPost() {
  return $this->hasOneThrough(
      Comment::class,  // Final model (C)
      Post::class,     // Intermediate model (B)
      'user_id',       // FK on posts table  posts.user_id
      'post_id',       // FK on comments table  comments.post_id
      'id',            // PK on users table
      'id'             // PK on posts table
  )->latestOfMany(); // get the latest comment
 }
 public function commentsThroughPosts() {
    return $this->hasManyThrough(
        Comment::class, // Final model (C)
        Post::class,    // Intermediate model (B)
        'user_id',      // FK on posts table posts.user_id
        'post_id',      // FK on comments table comments.post_id
        'id',           // PK on users table
        'id'            // PK on posts table
    );
}

}
