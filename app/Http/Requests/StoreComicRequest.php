<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:100',
            'description' => 'required|max:1000',
            'thumb' => 'required|url:http,https',
            'price' => 'required|decimal:2',
            'series' => 'required|max:50',
            'sale_date' => 'required|date',
            'type' => 'required|max:50',
            'artists' => 'required|max:200',
            'writers' => 'required|max:200',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.max' => 'Per il titolo hai superato il limite di caratteri massimo consentito(:max)',
            'description.required' => 'La descrizione è obbligatoria',
            'description.max' => 'Per la descrizione hai superato il limite di caratteri massimo consentito(:max)',
            'thumb.required' => 'L\'immagine è obbligatoria',
            'thumb.url' => 'L\'immagine deve essere fornita come URL',
            'price.required' => 'Il prezzo è obbligatorio',
            'price.decimal' => 'Il prezzo deve essere fornito con :decimal decimali',
            'series.required' => 'La serie del fumetto è obbligatoria',
            'series.max' => 'Per la serie del fumetto hai superato il limite di caratteri massimo consentito(:max)',
            'sale_date.required' => 'La data in cui inizia lo sconto è obbligatoria',
            'sale_date.date' => 'Il formato della data inserita non è valido, riprovare',
            'type.required' => 'Il tipo di fumetto è obbligatorio',
            'type.max' => 'Per il tipo di fumetto hai superato il limite di caratteri massimo consentito(:max)',
            'artists.required' => 'Gli artisti sono obbligatori',
            'artists.max' => 'Per gli artisti hai superato il limite di caratteri massimo consentito(:max)',
            'writers.required' => 'Gli scrittori sono obbligatori',
            'writers.max' => 'Per gli scrittori hai superato il limite di caratteri massimo consentito(:max)',
        ];
    }
}
