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
        $data_received = $request->all();

        $comic = new Comic();
        $comic->title = $data_received['title'];
        $comic->description = $data_received['description'];
        $comic->thumb = $data_received['thumb'];
        $comic->price = floatval($data_received['price']);
        $comic->series = $data_received['series'];
        // sembra laravel gestisca formati di date ricevuti diversi da quelli che accetterebbe il rdbms
        $comic->sale_date = $data_received['sale_date'];
        $comic->type = $data_received['type'];
        $comic->artists =  $data_received['artists'];
        $comic->writers =  $data_received['writers'];
        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        // $comic = Comic::find($id);

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
