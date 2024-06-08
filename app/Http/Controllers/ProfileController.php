<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editor;
use App\Models\User;

class ProfileController extends Controller
{
    //
    public function show(User $user)
    {

        $type = request('type','pens');
        // $pen = Editor::where('user_id',auth()->user()->id)->orderby('updated_at','desc');

        if($type == 'love')
        {

            $pens = $user->love()->paginate(8);
        }
        else
        {

            $pens = $user->editors()->paginate(8);
        }



        return view('profile.profilePage', compact('pens', 'user'));
    }

    public function profile()
    {
        return redirect()->route('otherprofile',auth()->user());
        // return $this->show(auth()->user());
    }


    public function follow(User $user)
    {
        $follower = auth()->user();

        $follower->followings()->attach($user);



        return redirect()->route('otherprofile',$user->id);
    }


    public function unfollow(User $user)
    {

        $follower = auth()->user();

        $follower->followings()->detach($user);

        return redirect()->route('otherprofile',$user->id);
    }
}
