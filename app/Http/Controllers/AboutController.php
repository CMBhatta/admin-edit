<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function index(){
        $abouts = About::all();
        return view('backend.about.index', compact('abouts'));
    }
    public function create(){
        return view('backend.about.create');        
    }

    public function store(Request $request){
        $validateData = $request->validate([ 
            'description' => 'required|string',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
            ]);
            $fileName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('images/'), $fileName);
            
            $about = new About();
            $about->photo = $fileName;
            $about->description = $request->input('description');
            
           
            $about->save();
            return redirect()->route('aboutus.index')
            ->with('success', 'Section added successfully.');
    }

    public function edit(string $id)
    {
        $about = About::find($id);
        return view('backend.about.edit', compact('about'));
    }
    public function update(Request $request, string $id)
{
    $validateData = $request->validate([ 
        'description' => 'required|string',
        'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
    ]);

    $about = About::findOrFail($id);

    if ($request->hasFile('photo')) {
        // Delete old photo if exists
        if ($about->photo) {
            $oldImagePath = public_path('images/' . $about->photo);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }

        $fileName = time() . '.' . $request->photo->extension();
        $request->photo->move(public_path('images/'), $fileName);
        $about->photo = $fileName;
    }

    $about->description = $request->description;
    $about->save();

    return redirect()->route('aboutus.index')
        ->with('success', 'Updated successfully.');
}

    public function delete(string $id)
    {
        $abouts = About::findOrFail($id)->delete();
        return redirect()->route('aboutus.index')
        ->with('success', 'Content deleted successfully.');
    }
}
