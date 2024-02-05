<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $comic_validate = $request->validate([
            'title' => 'required|max:100',
            'description' => 'required|max:1000',
            'thumb' => 'required|url:http,https',
            'price' => 'required|decimal:2',
            'series' => 'required|max:50',
            'sale_date' => 'required|date',
            'type' => 'required|max:50',
            'artists' => 'required|max:200',
            'writers' => 'required|max:200',
        ]);
        $comic = new Comic();
        $comic->fill($comic_validate);
        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $comic_validate = $request->validate([
            'title' => 'required|max:100',
            'description' => 'required|max:1000',
            'thumb' => 'required|url:http,https',
            'price' => 'required|decimal:2',
            'series' => 'required|max:50',
            'sale_date' => 'required|date',
            'type' => 'required|max:50',
            'artists' => 'required|max:200',
            'writers' => 'required|max:200',
        ]);
        $comic->update($comic_validate);
        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
