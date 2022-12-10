<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YouTubeController extends Controller
{
    public function index()
    {
     return view(view:'index');
    }
    public function results()
{
return view(view:'results');
}
public function watch()
{
return view(view:'watch');
}

}


