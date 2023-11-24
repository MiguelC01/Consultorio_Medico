<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function store(Request $request) {
        // validar datos

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);
    }
}
