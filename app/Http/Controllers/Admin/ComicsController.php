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
        ], [
            'title' => 'Il titolo è obbligatorio',
            'title.max' => 'Per il titolo hai superato il limite di caratteri massimo consentito(:max)',
            'description' => 'La descrizione è obbligatoria',
            'description.max' => 'Per la descrizione hai superato il limite di caratteri massimo consentito(:max)',
            'thumb' => 'L\'immagine è obbligatoria',
            'thumb.url' => 'L\'immagine deve essere fornita come URL',
            'price' => 'Il prezzo è obbligatorio',
            'price.decimal' => 'Il prezzo deve essere fornito con :decimal decimali',
            'series' => 'La serie del fumetto è obbligatoria',
            'series.max' => 'Per la serie del fumetto hai superato il limite di caratteri massimo consentito(:max)',
            'sale_date' => 'La data in cui inizia lo sconto è obbligatoria',
            'sale_date.date' => 'Il formato della data inserita non è valido, riprovare',
            'type' => 'Il tipo di fumetto è obbligatorio',
            'type.max' => 'Per il tipo di fumetto hai superato il limite di caratteri massimo consentito(:max)',
            'artists' => 'Gli artisti sono obbligatori',
            'artists.max' => 'Per gli artisti hai superato il limite di caratteri massimo consentito(:max)',
            'writers' => 'Gli scrittori sono obbligatori',
            'writers.max' => 'Per gli scrittori hai superato il limite di caratteri massimo consentito(:max)',
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
        ], [
            'title' => 'Il titolo è obbligatorio',
            'title.max' => 'Per il titolo hai superato il limite di caratteri massimo consentito(:max)',
            'description' => 'La descrizione è obbligatoria',
            'description.max' => 'Per la descrizione hai superato il limite di caratteri massimo consentito(:max)',
            'thumb' => 'L\'immagine è obbligatoria',
            'thumb.url' => 'L\'immagine deve essere fornita come URL',
            'price' => 'Il prezzo è obbligatorio',
            'price.decimal' => 'Il prezzo deve essere fornito con :decimal decimali',
            'series' => 'La serie del fumetto è obbligatoria',
            'series.max' => 'Per la serie del fumetto hai superato il limite di caratteri massimo consentito(:max)',
            'sale_date' => 'La data in cui inizia lo sconto è obbligatoria',
            'sale_date.date' => 'Il formato della data inserita non è valido, riprovare',
            'type' => 'Il tipo di fumetto è obbligatorio',
            'type.max' => 'Per il tipo di fumetto hai superato il limite di caratteri massimo consentito(:max)',
            'artists' => 'Gli artisti sono obbligatori',
            'artists.max' => 'Per gli artisti hai superato il limite di caratteri massimo consentito(:max)',
            'writers' => 'Gli scrittori sono obbligatori',
            'writers.max' => 'Per gli scrittori hai superato il limite di caratteri massimo consentito(:max)',
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
