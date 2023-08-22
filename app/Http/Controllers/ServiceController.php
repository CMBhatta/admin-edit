<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function homeService()
    {
        $services = Service::all();
        // dd($services);
        return view('backend.services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        $fileName = time() . '.' . $request->photo->extension();
        $request->photo->move(public_path('images/'), $fileName);
        
        $service = new Service();
        $service->photo = $fileName;
        $service->name = $request->input('name');
        $service->description = $request->input('description');
        
       
        $service->save();
        return redirect()->route('teams.home')
        ->with('success', 'Service added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $services = Service::find($id);
        return view('backend.services.edit', compact('services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $validatedData = $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $service = Service::findOrFail($id);
        $service->photo = request('photo');
        $service->name = request('name');
        $service->description = request('description');
        $service->save();
        return redirect()->route('teams.home')
        ->with('success', 'Service updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $services = Service::findOrFail($id)->delete();
        return redirect()->route('teams.home')
        ->with('success', 'Service deleted successfully.');
    }
}
