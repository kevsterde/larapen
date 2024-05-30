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


        // $pen = Editor::where('user_id',auth()->user()->id)->orderby('updated_at','desc');
        $pens = $user->editors()->paginate(6);

        return view('profile.profilePage', compact('pens','user'));
    }

    public function profile()
    {
        return $this->show(auth()->user());
    }


}
