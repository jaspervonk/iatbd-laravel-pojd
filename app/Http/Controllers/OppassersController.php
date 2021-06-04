<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class OppassersController extends Controller
{
    // Toon alle oppassers
    public function index(){
        return view('oppassers.index', ['oppassers' => \App\Models\Oppas::all()]);
    }

    // Toon enkel oppas laten zien met reacties; Geef admin mee om te bepalen of een admin is ingelogd
    public function show($id){
        return view('oppassers.show', ['oppas' => \App\Models\Oppas::find($id),
                                        'reviews' => \App\Models\Review::all()->where('oppas', '=', $id),
                                        'admin' => \App\Models\Admin::all()->where('admin', '=', Auth::id())->first()]);
    }

    // Oppas formulier met bijbehorende image options
    public function formulier(){
        return view('oppassers.formulier', ['images' => \App\Models\Image::all()->where('soort', '=', 'oppas')]);
    }

    // Oppas aanmaken
    public function store(Request $request, \App\Models\Oppas $oppas ) {
        $oppas->image = $request->input('image');
        $oppas->adres = $request->input('adres');
        $oppas->beschrijving = $request->input('beschrijving');
        $oppas->user_id = Auth::user()->id;

        // Probeer Oppas toe te voegen en laat zien
        try {
            $oppas->save();
            $oppas_id = \App\Models\Oppas::all()->last()->id;
            return redirect('/oppassers/' . $oppas_id);
        }
        // Als de oppasser al bestaat of het is niet gelukt; Ga naar oppassers
        catch(Exception $e) {
            return redirect('/oppassers');
        }
    }

    public function remove(Request $request, \App\Models\Oppas $oppas, \App\Models\Review $review, \App\Models\Aanvraag $aanvraag, \App\Models\Huisdier $huisdier){
        // Alle huisdieren van de aanvragen beschikbaar stellen
        foreach($aanvraag::where('oppas', '=', $request->input('oppas'))->get() as $aanvraag){
            $huisdier::all()->where('id', '=', $aanvraag->huisdier)->first()->update(['status' => 'beschikbaar']);
        }
        // Alle aanvragen die met de oppasser te maken hebben verwijderen
        $aanvraag::where('oppas', '=', $request->input('oppas'))->delete();
        // Alle reviews van de oppasser verwijderen
        $review::where('oppas', '=', $request->input('oppas'))->delete();
        // Oppasser verwijderen
        $oppas::find($request->input('oppas'))->delete();

        return redirect('/oppassers');
    }
}
