<?php

namespace App\Http\Controllers;
use App\Http\Controllers;
use App\Http\Controllers\UserController;
use App\Models;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(!auth()->attempt($request->only('email', 'password'))){
            return back()->with('status', 'Creedenciales no válidas');
        }
        return redirect()->route('user.index', auth()->user()->id);
    }


}
