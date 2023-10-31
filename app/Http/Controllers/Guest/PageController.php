<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;


class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function comics()
    {
        $comics = Comic::all();
        return view('pages.comics', ['comics' => $comics]);
    }
}
