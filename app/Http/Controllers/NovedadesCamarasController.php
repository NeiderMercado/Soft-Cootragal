<?php

namespace App\Http\Controllers;

use App\Models\novedad_camaras;
use Illuminate\Http\Request;
use Illuminate\Http\Request\hash_file;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class NovedadesCamarasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$datos es una variable que se toma para usar el modelo de novedades camaras para traer los datos de mysql, EL MODELO DEBE DE LLAMRSE IGUAL QUE LA TABLA
        //Luego $datos lo puedes usar en cualquier balde.php, usando el compact
        $datos = DB::select('select * from novedad_camaras where tipo = "M"');
        return view('Camaras/1_camaras', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Camaras/2_crear_novedad');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $novedad_camaras = new novedad_camaras();
        $novedad_camaras->interno=$request->post('int-placa');
        $novedad_camaras->conductor=$request->post('conductor');
        $novedad_camaras->fecha_novedad=$request->post('date_activi');
        $novedad_camaras->actividad=$request->post('actividad');
        $novedad_camaras->observaciones=$request->post('observaciones');
        $novedad_camaras->detalle_actividad=$request->post('detalle_actividad');
        $novedad_camaras->tipo=$request->post('tipo');
        $novedad_camaras->responsable_actividad=$request->post('user_responsable');
        $novedad_camaras->circuito=$request->post('circuito');
        $novedad_camaras->memoria=$request->post('memoria');
        $novedad_camaras->camara=$request->post('camara');
        $novedad_camaras->cable=$request->post('cable');
        $novedad_camaras->estado=$request->post('estado');
        $novedad_camaras->soportes=$request->post('soporte');
        $novedad_camaras->created_at=$request->post('date_activi');
        $novedad_camaras->save();
        
        
        return redirect()->route('1_camaras.index')->with("exito", " La nueva novedad fue registrada con éxito en la base de datos.");


    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $novedad_camaras = novedad_camaras::find($id);
        return view("Camaras/4_eliminar_novedad", compact('novedad_camaras'));
        

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $novedad_camaras = novedad_camaras::find($id);
        return view("Camaras/3_editar_novedad", compact('novedad_camaras'));
        //return view ('Camaras/3_editar_novedad');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $novedad_camaras = novedad_camaras::find($id);

        $novedad_camaras->interno=$request->post('int-placa');
        $novedad_camaras->conductor=$request->post('conductor');
        $novedad_camaras->detalle_actividad=$request->post('detalle_actividad');
        $novedad_camaras->tipo=$request->post('tipo');
        $novedad_camaras->responsable_actividad=$request->post('user_responsable');
        $novedad_camaras->fecha_realizado=$request->post('date_activi');
        $novedad_camaras->circuito=$request->post('circuito');
        $novedad_camaras->memoria=$request->post('memoria');
        $novedad_camaras->camara=$request->post('camara');
        $novedad_camaras->cable=$request->post('cable');
        $novedad_camaras->estado=$request->post('estado');
        $novedad_camaras->soportes=$request->post('soporte');
        $novedad_camaras->created_at=$request->post('date_activi');
        $novedad_camaras->save();
        
        return redirect()->route('1_camaras.index')->with("actualizado", " La nueva novedad fué ACTUALIZADA con éxito.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $novedad_camaras = novedad_camaras::find($id);
        $novedad_camaras->delete();
        
        return redirect()->route('1_camaras.index')->with("eliminado", " La nueva novedad fué ELIMINADA con éxito.");
    }

    public function detalle($id){
        $novedad_camaras = novedad_camaras::find($id);
        return view("Camaras/5_detalle_novedad", compact('novedad_camaras'));
    }


    
}
