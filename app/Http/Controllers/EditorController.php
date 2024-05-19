<?php

namespace App\Http\Controllers;

use App\Models\Editor;
use Illuminate\Http\Request;

class EditorController extends Controller
{
    //

    public function index(){
        return view('Editor.editor');
    }


    public function create(Request $request){

         $data = $request->all();
        

        Editor::create([
            'user_id' => 1,
            'title' => $data['codetitle'],
            'html' => $data['htmlcode'],
            'css' => $data['csscode'],
            'js' => $data['jscode'],
        ]);
        
    }
}