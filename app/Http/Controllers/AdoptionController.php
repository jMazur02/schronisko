<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adoption;

class AdoptionController extends Controller
{
    public function store(Request $request)
    {
       
        $validated = $request->validate([
            'imieZwierzecia' => 'required',
            'posiadaszInneZwierzeta' => 'required',
            'emailAdres' => 'required|email',
          
            'telefonNumer' => ['required', 'regex:/^[0-9]{3}-?[0-9]{3}-?[0-9]{3}$/'],
            'oSobie' => 'required|min:10',
        ], [
            
            'imieZwierzecia.required' => 'Musisz wybrać zwierzaka!',
            'emailAdres.email' => 'Podaj poprawny adres e-mail.',
            'telefonNumer.regex' => 'Zły format numeru telefonu.',
        ]);

       
        $jakieZwierzeta = null;
        if ($request->has('rodzajInnychZwierzat')) {
          
            $jakieZwierzeta = implode(', ', $request->rodzajInnychZwierzat);
        }


        Adoption::create([
            'imie_zwierzecia' => $request->imieZwierzecia,
            'czy_posiada_zwierzeta' => $request->posiadaszInneZwierzeta,
            'jakie_zwierzeta' => $jakieZwierzeta,
            'email' => $request->emailAdres,
            'telefon' => $request->telefonNumer,
            'o_sobie' => $request->oSobie,
        ]);


        return redirect('/zaadoptuj')->with('success', 'Zgłoszenie zostało wysłane pomyślnie!');
    }
}