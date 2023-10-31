<?php

namespace Database\Seeders;

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
            // $... = new Comic::all();
            // 
            // $... = save();
        }
    }
}
