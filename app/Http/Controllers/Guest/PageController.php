<?php

namespace App\Http\Controllers\Guest;


use App\Models\Comic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function home()
    {
        $comics = Comic::all();
        return view('home',compact('comics'));
    }

}
