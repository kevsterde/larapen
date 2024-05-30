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
            ['pens' => $pen->paginate('6')]
        );
    }

    public function notFound(){
        return view('misc.404');
    }


    public function iframeContent($id){


            $pen = Editor::where('code_id',$id)->first();

            if(!$pen)
            {
                abort(404,'Content not found');
            }

            $htmlContent = $pen->htmlcode;
            $cssContent = $pen->csscode;
            $jsContent = $pen->jscode;


            $fullHtmlContent ="<!DOCTYPE html>
            <html>
            <head>
                <link href='https://cdn.jsdelivr.net/npm/reset-css@5.0.2/reset.min.css' rel='stylesheet'>
                <style>{$cssContent}</style>
            </head>
            <body>{$htmlContent}
                <script> {$jsContent} </script>
            </body>
            </html>";

            return  response($fullHtmlContent)->header('Content-Type','text/html');

    }
}
