<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('comics');

        foreach ($comics as $comic) {
            $new_comic = new Comic();
            $new_comic->title = $comic->title;
            $new_comic->description = $comic->description;
            $new_comic->price = $comic->price;
            $new_comic->series = $comic->series;
            $new_comic->sale_date = $comic->sale_date;
            $new_comic->artists = $comic->artists; //questo è un array
            $new_comic->writers = $comic->writers; //questo è un array
            $new_comic->save();
        }
    }
}
