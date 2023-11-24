<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // switch ($tipoUsuario) {
        //     case 'Administrador':
        //         $users = User::all();
        //         //dd($users);
        //         return view('admin.home');
        //         break;

        //     case 'Doctor':
        //         $users = User::where('tipoUsuario', 'Paciente');
        //         return view('doctor.home', compact('users'));
        //         break;

        //     default:
        //         abort(403, 'No tienes permisos para ver esta página.');
        // }

        return view('admin/registrar');
    }

    // Metodo para registrar un usuario
    public function store(Request $request) {


        // validar datos

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
            'name' => 'required',
            'lastname' => 'required',
            'tipoUsuario' => 'required',
            'fecha' => 'required'
        ]);

        // Crear e registro de usuario

        User::create([
            'email' => $request->email,
            'password' => $request->password,
            'name' => $request->name,
            'lastname' => $request->lastname,
            'tipoUsuario' => $request->tipoUsuario,
            'fecha' => $request->fecha
        ]);

        // Autenticar el usuario

        auth()->attempt($request->only('email', 'password'));

        return redirect('/');
    }
}
