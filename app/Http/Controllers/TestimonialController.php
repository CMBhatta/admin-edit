<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function index(){
        $testimonials = Testimonial::all();
        return view('backend.testimonial.index',compact('testimonials'));
    }

    public function create(){
        return view('backend.testimonial.create');
    }

    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        $fileName = time() . '.' . $request->photo->extension();
        $request->photo->move(public_path('images/'), $fileName);
        
        $testimonial = new Testimonial();
        $testimonial->photo = $fileName;
        $testimonial->name = $request->input('name');
        $testimonial->description = $request->input('description');
        
       
        $testimonial->save();
        return redirect()->route('testimonials.index')
        ->with('success', 'Service added successfully.');
    }
    public function edit(string $id)
    {
        $testimonial = Testimonial::find($id);
        return view('backend.testimonial.edit', compact('testimonial'));
    }
    public function update(Request $request, string $id)
    {
        $validateData = $request->validate([ 
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
    
        $testimonial = Testimonial::findOrFail($id);
    
        if ($request->hasFile('photo')) {
            // Delete old photo if exists
            if ($testimonial->photo) {
                $oldImagePath = public_path('images/' . $testimonial->photo);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
    
            $fileName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('images/'), $fileName);
            $testimonial->photo = $fileName;
        }
    
        $testimonial->name = $request->name;
        $testimonial->description = $request->description;
        $testimonial->save();
    
        return redirect()->route('testimonials.index')
            ->with('success', 'Updated successfully.');
    }
    public function delete(string $id)
    {
        $testimonial = Testimonial::findOrFail($id)->delete();
        return redirect()->route('testimonials.index')
        ->with('success', 'Content deleted successfully.');
    }
    }