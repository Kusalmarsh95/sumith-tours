<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::paginate(5);
        return view('galleries.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('galleries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        $path = $request->file('image')->store('images', 'public');

        Gallery::create([
            'title' => $request->title,
            'image_path' => $path,
        ]);

        return redirect()->route('galleries.index')->with('success', 'Image uploaded successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($request->hasFile('image')) {
            Storage::delete('public/' . $gallery->image_path);
            $gallery->image_path = $request->file('image')->store('images', 'public');
        }

        $gallery->title = $request->title;
        $gallery->save();

        return redirect()->route('galleries.index')->with('success', 'Image updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        Storage::delete('public/' . $gallery->image_path);
        $gallery->delete();

        return redirect()->route('galleries.index')->with('success', 'Image deleted successfully');
    }
}
