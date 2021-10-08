<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class Coche extends Controller
{
    public function inicio(){
        $coches = App\Coche::all();
        return view('welcome',compact('coches'));
    }

    public function datos($id){

        $modelo = App\modelo::all()->where('serie',$id);
        return view('datos',compact('modelo'));
    }

    public function modelos(){

        $modelo = App\modelo::all();
        return view('modelos',compact('modelo'));
    }

    public function precio(){

        $modelo = App\modelo::all()->sortByDesc('precio');
        return view('modelos',compact('modelo'));
    }

    public function precioB(){

        $modelo = App\modelo::all()->sortBy('precio');
        return view('modelos',compact('modelo'));
    }

    public function id(){

        $modelo = App\modelo::all()->sortBy('id');
        return view('modelos',compact('modelo'));
    }

    public function az(){

        $modelo = App\modelo::all()->sortBy('marca');
        return view('modelos',compact('modelo'));
    }

    public function za(){

        $modelo = App\modelo::all()->sortByDesc('marca');
        return view('modelos',compact('modelo'));
    }

    public function buscar(){

        return view('buscar');
    }

    public function buscardatos(Request $request){
        if ($request->ajax()) {
            $modelo = App\modelo::where('marca','like', $request->busca. '%')->get();
            if ($modelo->count() > 0) {
                return response()->json($modelo);
            }
            else{
                return response()->json(['id'=>'n']);
            }
        }
    }

    public function crear(Request $request){
        //return $request->all();

        $request->validate([
            'numero_serie'=>'required'
        ]);

        $nuevocoche = new App\Coche;
        $nuevocoche->numero_serie = $request->numero_serie;
    
        $nuevocoche->save();

        return back()->with('mensaje','Numero de serie añadido.');
    }

        public function crear2(Request $request){
        //return $request->all();

        $request->validate([
            'marca'=>'required',
            'modelo'=>'required',
            'matricula'=>'required',
            'precio'=>'required',
            'año'=>'required'
        ]);

        $nuevocoche = new App\modelo;
        $nuevocoche->marca = $request->marca;
        $nuevocoche->modelo = $request->modelo;
        $nuevocoche->matricula = $request->matricula;
        $nuevocoche->precio = $request->precio;
        $nuevocoche->año = $request->año;
        //Añadir para poder insertar imagenes
        $nuevocoche->images = $request->images->getClientOriginalName();
        $nuevocoche->serie = $request->serie;

        $request->file('images')->storeAs('public',$nuevocoche->images);
        $nuevocoche->save();

        return back()->with('mensaje','Modelo añadido.');
    }

    public function editar($id){
        $modelo = App\modelo::findOrFail($id);
        return view('editar',compact('modelo'));
    }

    public function update(Request $request, $id){

        $request->validate([    
            'marca'=>'required',
            'modelo'=>'required',
            'matricula'=>'required',
            'precio'=>'required',
            'año'=>'required'
        ]);

        $modeloupdate = App\modelo::findOrFail($id);
        $modeloupdate->marca = $request->marca;
        $modeloupdate->modelo = $request->modelo;
        $modeloupdate->matricula = $request->matricula;
        $modeloupdate->precio = $request->precio;
        $modeloupdate->año = $request->año;

        $modeloupdate->save();
        return back()->with('mensaje','Modelo actualizado.');
    }

    public function eliminar($id){
        $modeloeliminar = App\modelo::findOrFail($id);
        $modeloeliminar->delete();

        return back()->with('mensaje','Modelo eliminado.');
    }
}
