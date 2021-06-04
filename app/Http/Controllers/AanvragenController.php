<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AanvragenController extends Controller
{
    // Toon alle aanvragen
    public function index(){
        if(Auth::user()->Oppas != null){
            return view('aanvragen.index', ['huisdieraanvragen' => \App\Models\Aanvraag::all()->where('huisdier_eigenaar', '=', Auth::user()->id)->where('status', '!=', 'geweigerd')->sortByDesc('id'),
                                        'oppasaanvragen' => \App\Models\Aanvraag::all()->where('oppas', '=', Auth::user()->Oppas->id)->sortByDesc('id')]);
        }
        else{
            return view('aanvragen.index', ['huisdieraanvragen' => \App\Models\Aanvraag::all()->where('huisdier_eigenaar', '=', Auth::user()->id)->where('status', '!=', 'geweigerd')->sortByDesc('id'),
                                            'oppasaanvragen' => []]);
        }
        
    }

    // Aanvraag aanmaken
    public function store(Request $request, \App\Models\Aanvraag $aanvraag) {
        if(\App\Models\Oppas::all()->where('user_id', '=', Auth::user()->id)->first() !== null){
            if(\App\Models\Aanvraag::all()->where('huisdier_eigenaar', '=', $request->input('huisdier_eigenaar'))->where('huisdier', '=', $request->input('huisdier'))->where('oppas', '=', Auth::user()->id)->first() === null){
            
                $aanvraag->huisdier_eigenaar = $request->input('huisdier_eigenaar');
                $aanvraag->huisdier = $request->input('huisdier');
                $aanvraag->oppas = Auth::user()->Oppas->id;
                $aanvraag->status = "voorstel";
        
                try {
                    $aanvraag->save();
                    return redirect('/aanvragen');
                }
                catch(Exception $e) {
                    return redirect('/huisdieren');
                }
            }
            else{
                 // Probeer Aanvraag toe te voegen en laat zien
                return redirect('/aanvragen');
            }
        }
        else{
            // Als de gebruiker nog geen Oppas is; Ga naar het Oppas formulier
            return redirect('/formulier/oppas');
        }
        
    }

    // Update een Aanvraag naar de meegegeven status
    public function update(Request $request, \App\Models\Aanvraag $aanvraag, \App\Models\Huisdier $huisdier){
        // Indien het verzoek is geaccepteerd wordt; Zet het huisdier zijn status naar in behandeling; Zo wordt het huisdier niet meer getoont in huisdieren
        if($request->input('status') != 'geweigerd'){
            $huisdier::find($request->input('huisdier'))->update(['status' => 'behandeling']);
        }
        // Update de status van de aanvraag
        $aanvraag::find($request->input('aanvraag'))->update(['status' => $request->input('status')]);
        return redirect('/aanvragen');
    }

    // De aanvraag verwijderen
    public function remove(Request $request, \App\Models\Aanvraag $aanvraag){
        $aanvraag::find($request->input('aanvraag'))->delete();
        return redirect('/aanvragen');
    }

    // Het afronden van een aanvraag door de Huisdier eigenaar
    public function complete(Request $request, \App\Models\Aanvraag $aanvraag, \App\Models\Review $review, \App\Models\Huisdier $huisdier){
        // Het aanmaken van de beoordeling
        $review->huisdier_eigenaar = $request->input('huisdier_eigenaar');
        $review->huisdier_soort = $request->input('huisdier_soort');
        $review->huisdier = $huisdier::find($request->input('huisdier'))->naam;
        $review->beoordeling = $request->input('beoordeling');
        $review->oppas = $request->input('oppas');
        
        try {
            $review->save();
            // Verwijder het Oppasvoorstel (huisdier) en de afgeronde aanvraag
            $aanvraag::find($request->input('aanvraag'))->delete();
            $huisdier::find($request->input('huisdier'))->delete();
            return redirect('/aanvragen');
        }
        catch(Exception $e) {
            return redirect('/aanvragen');
        }
    }
}
