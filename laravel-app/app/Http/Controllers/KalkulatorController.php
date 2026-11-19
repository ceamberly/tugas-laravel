<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function segitiga(Request $request)
    {
        $luas = null;

        if ($request->isMethod('post')) {
            $request->validate([
                'alas' => 'required|numeric|min:0.01',
                'tinggi' => 'required|numeric|min:0.01',
            ]);

            $alas = $request->alas;
            $tinggi = $request->tinggi;

            $luas = 0.5 * $alas * $tinggi;
        }

        return view('kalkulator', compact('luas'));
    }
}