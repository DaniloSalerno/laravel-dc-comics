<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::orderBy('id')->paginate(10);
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $image_path = null;
        if ($request->has('image')) {

            $image_path = Storage::put('comic_image', $request->image);
        }

        $comic = new Comic();
        $comic->title = $request->title;
        $comic->thumb = $image_path;
        $comic->series = $request->series;
        $comic->save();

        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        if ($comic) {
            return view('admin.comics.show', compact('comic'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        //dd($request->all());
        $data = $request->all();

        if ($request->has('image') && $comic->thumb) {

            Storage::delete($comic->thumb);

            $newImageFile = $request->image;

            $path = Storage::put('comic_image', $newImageFile);

            $data['image'] = $path;
        }

        $comic->update($data);

        return to_route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
