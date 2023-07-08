<?php

namespace App\Http\Controllers\Guest;

use App\Models\Comic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComicController extends Controller
{
    private $validations = [
        'title'           => 'required|string|min:5|max:100',
        'thumb'           => 'string|max:500',
        'type'            => 'required|string|max:20',
        'series'          => 'required|string|min:5|max:255',
        'price'           => 'required|integer|max:2000',
        'sale_date'       => 'required|date',
        'description'     => 'string',
    ];

    public function index()
    {
        $comics = Comic::all(); 


        return view('comics.index', compact('comics'));
    }

    public function create()
    {
        return view('comics.create');
    }


    public function store(Request $request)
    {
        $request->validate($this->validations);
        
        $data = $request->all();
        
        $newComic = new Comic();
        
        $newComic->title          = $data['title'];
        $newComic->thumb          = $data['thumb'];
        $newComic->type           = $data['type'];
        $newComic->series         = $data['series'];
        $newComic->price          = $data['price'];
        $newComic->sale_date      = $data['sale_date'];
        $newComic->description    = $data['description'];
        
        $newComic->save();
        
        
		return redirect()->route('comics.show', ['comic' => $newComic->id]);
    }
    
    
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        
        return view('comics.show', compact('comic'));
        
    }
    
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
        
    }
    
    
    public function update(Request $request, Comic $comic)
    {
        $request->validate($this->validations);
        $data = $request->all();
        
        $comic->title          = $data['title'];
        $comic->thumb          = $data['thumb'];
        $comic->type           = $data['type'];
        $comic->series         = $data['series'];
        $comic->price          = $data['price'];
        $comic->sale_date      = $data['sale_date'];
        $comic->description    = $data['description'];
        
        $comic->update();
        
        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }
    

    public function destroy($id)
    {}
}
