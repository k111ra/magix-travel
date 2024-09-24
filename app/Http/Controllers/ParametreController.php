<?php

namespace App\Http\Controllers;

use App\Models\Reseau;
use App\Models\Reseaux;
use App\Models\Information;
use Illuminate\Http\Request;

class ParametreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.parametre.general.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.parametre.general.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
        {
            $request->validate([
                'nom_compagnie' => 'nullable|max:255',
                'localisation' => 'nullable',
                'contact' => 'nullable',
                'lien_google_map' => 'nullable',
                'email' => 'nullable',
            ]);

            $information = Information::first(); // Récupère la première instance de Information, si elle existe

            if ($information) {
                // Si les informations existent, on met à jour
                $information->nom_compagnie = $request->input('nom_compagnie', $information->nom_compagnie);
                $information->localisation = $request->input('localisation', $information->localisation);
                $information->contact = $request->input('contact', $information->contact);
                $information->lien_google_map = $request->input('lien_google_map', $information->lien_google_map);
                $information->email = $request->input('email', $information->email);
                $information->save();
                
                return redirect()->back()->with('success', 'Informations mises à jour avec succès.');
            } else {
                // Si aucune information n'existe, on crée une nouvelle
                $information = new Information();
                $information->nom_compagnie = $request->input('nom_compagnie');
                $information->localisation = $request->input('localisation');
                $information->contact = $request->input('contact');
                $information->lien_google_map = $request->input('lien_google_map');
                $information->email = $request->input('email');
                $information->save();

                return redirect()->back()->with('success', 'Informations enregistrées avec succès.');
            }
        }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reseaux(Request $request)
    {
        $request->validate([
            'facebook' => 'nullable|max:255',
            'linkedin' => 'nullable',
            'instagram' => 'nullable',
            'twitter' => 'nullable',
            'youtube' => 'nullable',
        ]);

        $reseaux = Reseaux::first(); // Récupère la première instance de Information, si elle existe

        if ($reseaux) {
            // Si les informations existent, on met à jour
            $reseaux->facebook = $request->input('facebook', $reseaux->facebook);
            $reseaux->linkedin = $request->input('linkedin', $reseaux->linkedin);
            $reseaux->instagram = $request->input('instagram', $reseaux->instagram);
            $reseaux->twitter = $request->input('twitter', $reseaux->twitter);
            $reseaux->youtube = $request->input('youtube', $reseaux->youtube);
            $reseaux->save();
            
            return redirect()->back()->with('success', 'Informations mises à jour avec succès.');
        } else {
            // Si aucune information n'existe, on crée une nouvelle
            $reseaux = new Reseaux();
            $reseaux->facebook = $request->input('facebook');
            $reseaux->linkedin = $request->input('linkedin');
            $reseaux->instagram = $request->input('instagram');
            $reseaux->twitter = $request->input('twitter');
            $reseaux->youtube = $request->input('youtube');
            $reseaux->save();

            return redirect()->back()->with('success', 'Informations enregistrées avec succès.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
