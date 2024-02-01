<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics_data = config('comics');

        foreach ($comics_data as $comic_data) {
            $comic = new Comic();

            $comic->title = $comic_data['title'];
            $comic->description = $comic_data['description'];
            $comic->thumb = $comic_data['thumb'];
            $comic->price = floatval(substr($comic_data['price'], 1));
            $comic->series = $comic_data['series'];
            $comic->sale_date = $comic_data['sale_date'];
            $comic->type = $comic_data['type'];
            $comic->artists = implode(",", $comic_data['artists']);
            $comic->writers = implode(",", $comic_data['writers']);

            $comic->save();
        }
    }
}
