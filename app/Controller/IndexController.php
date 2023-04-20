<?php

namespace App\Controller;

use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController{
  public function indexAction(Request $request): View {
    if ($request->getMethod()==='POST'){
        $validated = $request->validate([
            'Username' => 'required|max:225',
            'Email' => 'email|max225|nullable',
            'Adresse' => 'required',
            'Plz Ort' => 'required',
            'Nachricht' => 'required',
        ]);
        dump($validated);
    }
    return view('index');
  }
}