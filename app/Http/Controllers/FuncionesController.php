<?php

namespace App\Http\Controllers;

use App\Funcion;

use Illuminate\Http\Request;

class FuncionesController extends Controller
{
    public function index() {
        $funciones = Funcion::all();
        $argumentos = array();
        $argumentos['funciones'] = $funciones;

        return view('funciones.index',$argumentos);
    }
    public function store(Request $request){
        $nuevoRegistro = new Funcion();
        $nuevoRegistro -> pelicula = $request -> input('pelicula');
        $nuevoRegistro -> fecha = $request -> input('fecha');
        $nuevoRegistro -> hora = $request -> input('hora');

        $nuevoRegistro -> save();

        return redirect() -> route('funciones.index');

    }

    public function create(){
        return view('funciones.create');
    }

    public function destroy($id){
        $registro = Funcion::find($id);

        if($registro){
            if($registro -> delete()){
                return redirect() -> route('funciones.index') -> with('success', 'Registro eliminado');
            }
            return redirect() -> route('funciones.index') -> with('error', 'No se pudo borrar');
            
        }
        return redirect() -> route('funciones.index') -> with('error', 'No se encotro el registro');
    }
}
