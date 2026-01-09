<?php

namespace App\Http\Controllers\TestRelationship;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use App\Models\Post;
class UserController extends Controller
{
    //
    public function index() {

        //  $users = User::with('userToProfile')->get();
        //  dd($users); // user & profile both

         $user = User::with('userToProfile')->find(1);
         //dd($user); 
         $profile = $user->userToProfile;
         dd($profile); // profile only

         //$profile = $user->userToProfile->bio;
         //dd($profile);

        // $user = User::with('userToProfile')->first();
        // $bio = $user->userToProfile->bio;
        // $id = $user->userToProfile->id;
        // dd($bio, $id);

        //$user = User::with('userToProfile')->skip(1)->first();
        //  $users = User::with('userToProfile')->get();
        // $user = $users[1];
        //dd($user);
        //  $bio = $user->userToProfile->bio;
        // $user_id = $user->userToProfile->user_id;
        //  dd($bio, $user_id);

    }
     public function index1() {

         //$users = Profile::with('user')->get();
        // dd($users); // user & profile both

         //$users = Profile::with('user')->find(1);
         //$profile = $users->user;
         //dd($profile); // profile only

         $users =Profile ::with('user')
        ->whereHas('user', function ($query) {
        $query->where('email', 'bobby.heller@bernier.biz');
        })
         ->get();
        foreach ($users as $profile) {
        $detail= $profile->id;
        dump($detail);
}
        

    }
     public function index2() {

        //  $users = User::with('posts')->get();
        //  dd($users);
        //  $user = User::with('posts')->find(1);
        // $posts = $user->posts;
        // dd($posts);
          $user_posts  = User::find(2)->posts;
          dd($user_posts);
        
        // $user_posts  = User::find(2)->posts;
        // foreach($user_posts as $user_post) {
        //     $user_post_title[] = $user_post->title;
        // }
        // dd($user_post_title);
}   
  
     public function index3() {
        $post= Post::find(1);
       dd($post->user->name);
 
}    public function index4() {
    $user= User::find(3);
      $posts=$user->likedPosts()->get();
    // dd($posts);
      foreach ($posts as $post) {
             // echo $post->title . "<br>";
           $title[] = $post->title;

        }
        dd( $title);
}
 public function showPostLikers() {
        $post = Post::find(1); // get Post 2

        // Get all users who liked the post
        $likers = $post->likers()->get();

        foreach ($likers as $user) {
            echo($user->name . "<br>");
        }
    }
        
public function showLatestComment($userId)
{
  // Using find()
  $user = User::find($userId);

  // Access single comment through hasOneThrough
  $latestComment = $user->latestCommentThroughPost;

  // Show result
  //dd($latestComment->comment);
  dd($latestComment);
}
public function showUserComments($id)
{
    // get single user
    $user = User::find($id);

    // get all comments through posts
    $comments = $user->commentsThroughPosts;

    foreach ($comments as $comment) {
	       echo $comment->comment . "<br>";
    }
}
    }



