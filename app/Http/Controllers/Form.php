<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Form extends Controller
{
    public function home() {
        return view('welcome');
    }

    // public function landing(){
    //     return view('landingpage');
    // }

    public function formu(){
        return view('form',compact('code','nombre', 'email', 'terapeuta', 'fecha', 'costo'));
    }

    public function recibirForm(request $request){
        $request->validate([
            'nombre' => 'required|max:50|min:10',
            'correo'=> 'required|email',
            'terapeuta' => 'required|max:50|min:10',
            'fecha' => 'required|date',
            'costo' => 'required',
        ]);//validar que han ingresado

        // DB::table('contactos')->insert([
        //     'nombre' => $request->nombre,
        //     'correo' => $request->correo,
        //     'comentario' => $request->comentario,
        // ]);

        // DB::table('contactos')->insert($request->except('_token'));
        // $usuarios = new Usuarios();
        // $usuarios->nombre = $request->nombre;
        // $usuarios->correo = $request->correo;
        // $usuarios->comentario = $request->comentario;
        // $usuarios->save();

        // Usuarios::create([
        //     'nombre'=> $request->nombre,
        //     'correo' = $request->correo,
        //     'comentario' = $request->comentario,
        // ]);

        Sesion::create($request->all());

        return redirect('/form');
    }


}

