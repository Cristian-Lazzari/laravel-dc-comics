<?php

namespace App\Http\Controllers\Guest;

use App\Models\Comic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComicController extends Controller
{

    public function index()
    {
        $comics = Comic::paginate(3); 


        return view('admin.index', compact('comics'));
    }

    public function create()
    {
        return view('comics.create');
    }


    public function store(Request $request)
    {}


    public function show($id)
    {}

    public function edit($id)
    {}


    public function update(Request $request, $id)
    {}


    public function destroy($id)
    {}
}
