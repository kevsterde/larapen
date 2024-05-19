<?php

namespace App\Http\Controllers;

use App\Models\Editor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class EditorController extends Controller
{
    //

    public function index(){
        return view('Editor.editor');
    }


    public function create(Request $request ){
        $Authuser = Auth::user();
       
         $data = $request->all();
        $result =  Editor::create([
            'user_id' => $Authuser->id,
            'title' => $data['codetitle'],
            'html' => $data['htmlcode'],
            'css' => $data['csscode'],
            'js' => $data['jscode'],
        ]);

        return redirect('/editor/'. $result->id)->with('success', 'Editor Created Successfully');
    }
}