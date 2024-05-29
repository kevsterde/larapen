<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editor;

class DashboardController extends Controller
{
    //
    public function index(){

        $pen = Editor::orderby('updated_at','desc');

        return view(
            "welcome",
            ['pens' => $pen->paginate('5')]
        );
    }

    public function notFound(){
        return view('misc.404');
    }
}
