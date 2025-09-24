<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // Parinte
            'p-nume'     => 'required|string|max:255',
            'p-prenume'  => 'required|string|max:255',
            'p-email'    => 'required|email|max:255',
            'p-phone'    => ['required', 'regex:/^[0-9\+\-\(\)\s]+$/', 'max:20'],

            // Copil
            'c-nume'     => 'required|string|max:255',
            'c-data'     => 'required|date',
            'locatii'    => 'required|array|min:1',
        ]);

        if ($validator->fails()) {
            return redirect('/#formular-intra-in-academie')
                ->withErrors($validator)
                ->withInput();
        }

        $validated = $validator->validated();

        $participant = Participant::create([
            'nume_parinte'    => $validated['p-nume'],
            'prenume_parinte' => $validated['p-prenume'],
            'mail_parinte'   => $validated['p-email'],
            'phone_parinte'   => $validated['p-phone'],
            'copil_nume'     => $validated['c-nume'],
            'copil_data'     => $validated['c-data'],
            'locatii'        => json_encode($validated['locatii']),
        ]);


        return redirect('/#formular-intra-in-academie')
            ->with('success', 'Formular trimis cu succes!');
    }
}
