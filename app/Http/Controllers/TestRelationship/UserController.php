<?php

namespace App\Http\Controllers\TestRelationship;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

class UserController extends Controller
{
    //
    public function index() {

         //$users = User::with('userToProfile')->get();
         //dd($users); // user & profile both

         //$user = User::with('userToProfile')->find(1);
         //$profile = $user->userToProfile;
         //dd($profile); // profile only

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


}
