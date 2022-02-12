<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class Language extends Controller
{
    //
    public function setLanguage(Request $request, $locale){
        $request->session()->put('locale', $locale);
        return redirect()->route('home');
    }
}
