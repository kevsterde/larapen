<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editor;

class DashboardController extends Controller
{
    //
    public function index(){

        $pen = Editor::orderby('updated_at','desc');

        // dd(request()->has('search'));
        if(request()->has('search'))
        {
            $pen = $pen->where("title", 'like' ,'%' . request()->get('search'). '%');
        }

        return view(
            "welcome",
            ['pens' => $pen->paginate('8')]
        );
    }

    public function notFound(){
        return view('misc.404');
    }


    public function iframeContent(Editor $editor){


            // $pen = Editor::where('code_id',$editor)->first();

            // no need to use where since code_id naman ang gipasa sa src route

            $htmlContent = $editor->htmlcode;
            $cssContent = $editor->csscode;
            $jsContent = $editor->jscode;


            $fullHtmlContent ="<!DOCTYPE html>
            <html>
            <head>
                <link href='https://cdn.jsdelivr.net/npm/reset-css@5.0.2/reset.min.css' rel='stylesheet'>
                <style>{$cssContent}</style>
                <style>
                body {
                    zoom: 70%;
                    -moz-transform: scale(0.7);
                    -moz-transform-origin: top;
                    -webkit-transform: scale(0.7);
                    -webkit-transform-origin: top;
                    -o-transform: scale(0.7);
                    -o-transform-origin: top;
                    -ms-transform: scale(0.7);
                    -ms-transform-origin: top;
                }
            </style>
            </head>
            <body style='overflow:hidden;'>{$htmlContent}
                <script> {$jsContent} </script>
            </body>
            </html>";

            return  response($fullHtmlContent)->header('Content-Type','text/html');

    }
}