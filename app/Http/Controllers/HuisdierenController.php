<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HuisdierenController extends Controller
{
    // Toon alle huisdieren
    public function index(){
        if(\App\Models\Admin::all()->where('admin', '=', Auth::id())->first() == null){
            return view('huisdieren.index', ['huisdieren' => \App\Models\Huisdier::all()->where('status', '=', 'beschikbaar')->sortByDesc('id'),
                                            'soorten' => \App\Models\SoortHuisdier::all()]);
        }
        else{
            return view('huisdieren.index', ['huisdieren' => \App\Models\Huisdier::all()->sortByDesc('id'),
                                            'soorten' => \App\Models\SoortHuisdier::all()]);
        }
        
    }

    // Toon enkel huisdier; Geef admin mee om te bepalen of een admin is ingelogd
    public function show($id){
        return view('huisdieren.show', ['huisdier' => \App\Models\Huisdier::find($id), 'user_id' => Auth::id(),
                                        'admin' => \App\Models\Admin::all()->where('admin', '=', Auth::id())->first()]);
    }

    // Oppas formulier met bijbehorende huisdier_soorten options
    public function formulier(){
        return view('huisdieren.formulier', ['soorten' => \App\Models\SoortHuisdier::all(), 'images' => \App\Models\Image::all()->where('soort', '=', 'huisdier')]);
    }

    // Huisdier aanmaken
    public function store(Request $request, \App\Models\Huisdier $huisdier ) {
        $huisdier->image = $request->input('image');
        $huisdier->naam = $request->input('naam');
        $huisdier->soort = $request->input('soort');
        $huisdier->oppasdatum = $request->input('oppasdatum');
        $huisdier->aantal_dagen = $request->input('oppasdagen');
        $huisdier->dagtarief = $request->input('dagtarief');
        $huisdier->beschrijving = $request->input('beschrijving');
        $huisdier->user_id = Auth::user()->id;

        // Probeer Huisdier toe te voegen en laat zien
        try {
            $huisdier->save();
            $huisdier_id = \App\Models\Huisdier::all()->last()->id;
            return redirect('/huisdieren/' . $huisdier_id);
        }
        // Als de oppasser al bestaat of het is niet gelukt; Ga naar huisdieren
        catch(Exception $e) {
            return redirect('/huisdieren');
        }
    }

    // Het verwijderen van een Huisdier
    public function remove(Request $request, \App\Models\Huisdier $huisdier, \App\Models\Aanvraag $aanvraag){
        // Alle aanvragen van het huisdier verwijderen
        $aanvraag::where('huisdier', '=', $request->input('huisdier'))->delete();
        $huisdier::find($request->input('huisdier'))->delete();
        return redirect('/huisdieren');
    }
}
