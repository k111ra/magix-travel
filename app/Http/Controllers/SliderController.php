<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderBy('id', 'desc')->get();
        return view('admin.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSliderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // Valider les données
        $request->validate([
            'images' => 'required|image',
            'description' => 'string|max:255',
        ]);
    
        // Enregistrer le slider
        $slider = new Slider();
        $slider->nom = $request->input('nom');
        $slider->description = $request->input('description');
        $slider->status = 'activé'; // Par défaut, le statut est activé
        if ($request->hasFile('images')) {
            $path = $request->file('images')->store('sliders', 'public');
            $slider->images = $path;
        }
        $slider->save();
    
        return redirect()->route('slider.index')->with('success', 'Slider ajouté avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $slider = Slider::findOrFail($id);
        if (!$slider) {
            return redirect()->back()->with('error', "Le slider spécifié n'existe pas.");
        }
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSliderRequest  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $status = Slider::findOrFail($id);
        $status->nom = $request->input('nom');
        $status->description = $request->input('description');
        $status->status = $request->input('status');
        if ($request->hasFile('images')) {
            // Supprimer l'ancienne image si elle existe
            if ($status->images) {
                Storage::disk('public')->delete($status->images);
            }
            // Store the new image
            $path = $request->file('images')->store('sliders', 'public');
            $status->images = $path;
        }
        // dd($status);
        $status->save();
        return redirect()->route('slider.index')->with('success', "Le slider a été modifié avec succès.");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect()->route('slider.index')->with('success', "Le slider a été supprimé avec succès");
    }
}
