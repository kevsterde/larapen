<?php

namespace App\Http\Controllers;

use App\Models\Editor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class EditorController extends Controller
{

    // public function index($user_id = null, $id = null)
    public function index(User $user)
    {
        $editor = null;
        // if ($user_id && $id) {
        //     $editor = Editor::where('user_id', $user_id)->where('code_id', $id)->first();
        // }
        // before and after
        // if($editor->user_id != $user->id) { return redirect()->route('404'); }


        // if ($editor == null && Auth::user() == null) {
        //     return redirect()->route('404');
        // }
        // before and after
        // If the editor is not found or the user is not authenticated, redirect to 404
            // if(!$editor && !Auth::check())
            // {
            //     return redirect()->route('404');
            // }

        return view('Editor.editor', compact('editor'));
    }

    public function show(User $user, Editor $editor)
    {


        if($editor->user_id != $user->id) { return redirect()->route('404'); }

        if(!$editor && !Auth::check())
        {
            return redirect()->route('404');
        }

        return view('Editor.editor', compact('editor'));
    }



    public function create(Request $request)
    {
        $Authuser = Auth::user();

        $data = $request->all();
        $result =  Editor::create([
            'user_id' => $Authuser->id,
            'title' => $data['title'],
            'htmlcode' => $data['htmlcode'],
            'csscode' => $data['csscode'],
            'jscode' => $data['jscode'],
        ]);

        // $userWithEditors = $Authuser->load('editors');
        //  dd($userWithEditors->editors);

        //  return redirect('/editor/'. $result->user_id . '/' .$result->id)->with('success', 'Editor Created Successfully');
        // return redirect()->route('editor.display', ['user_id' => $result->user_id, 'id' => $result->code_id])
        //     ->with('success', 'Editor Created Successfully');

        return redirect()->route('editor.display', ['user' => $Authuser->id, 'editor' => $result->code_id])
        ->with('success', 'Created Updated Successfully');


    }


    public function update(Request $request,User $user, Editor $editor)
    // public function update(Request $request, $user_id, $id)
    {
        // if ($id == null) {
        //     return redirect()->route('404');
        // }

        // $editorId = Editor::where('code_id', $id)->first();

        $editor->update($request->all());


        return redirect()->route('editor.display', ['user' => $editor->user_id, 'editor' => $editor->code_id])
            ->with('success', 'Editor Updated Successfully');
    }


    public function love(Editor $editor){

        $lover = auth()->user();

        if(!$lover->love()->where('lovepens.code_id', $editor->code_id)->first())
        {

            $lover->love()->attach($editor->code_id);
        }

    //     return redirect()->route('editor.display',

    //     ['user_id' => $editor->user, 'id' => $editor->code_id]
    // );
    return redirect()->route('editor.display', ['user' => $editor->user_id, 'editor' => $editor->code_id]);
    }
    public function unlove(Editor $editor){


        $lover = auth()->user();

        $lover->love()->detach($editor->code_id);

    //     return redirect()->route('editor.display',

    //     ['user_id' => $editor->user, 'id' => $editor->code_id]
    // );
    return redirect()->route('editor.display', ['user' => $editor->user_id, 'editor' => $editor->code_id]);
    }

    public function destroy( User $user,Editor $editor)
    {
        if($user->id != $editor->user_id)
        {
            abort(404);
        }

        $editor->delete();


        return redirect()->route('profile');


    }
}