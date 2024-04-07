<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime;

// CrudOperations.php

class CrudOperations extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anime = Anime::all();
        return view('crud.index', compact('anime'));
    }


    public function home()
    {
        $anime = Anime::all();
        return view('crud.home', compact('anime'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'namaFilm' => 'required',
            'slug' => 'required',
            'rating' => 'required',
            'genre' => 'required',
            'tahun' => 'required',
            'deskripsi' => 'required',
            'image' => 'required',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $input['image'] = $postImage;
        }

        Anime::create($input);

        return redirect()->route('crud.home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Anime $anime)
    {
        return view(
            'crud.show',
            compact('anime')
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anime $anime)
    {
        return view('crud.update', compact('anime'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anime $anime)
    {
        $request->validate([
            'namaFilm' => 'required',
            'slug' => 'required',
            'rating' => 'required',
            'genre' => 'required',
            'tahun' => 'required',
            'deskripsi' => 'required',
            // Make image upload optional during update
            'image' => 'sometimes|file',
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $input['image'] = $postImage;
        } else {
            unset($input['image']);
        }

        $anime->update($input);

        return redirect()->route('crud.home')->with('success', 'Anime updated successfully');
    }

    public function delete(Anime $anime)
    {
        if ($anime->image) {
            $path = 'image/' . $anime->image;
            if (file_exists($path)) {
                unlink($path); //unlink delete the file
            }
        }
        // delete anime from database
        $anime->delete();
        return redirect()->route('crud.home')->with('success', 'Anime deleted successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anime $anime)
    {
        $anime->delete();
        return redirect()->route('crud.home');
    }
}
