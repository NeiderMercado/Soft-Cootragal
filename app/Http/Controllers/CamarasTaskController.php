<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CamarasTask;
use App\Models\novedad_camaras;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CamarasTaskController extends Controller
{
    public function index()
    {

        $task_done = DB::table('novedad_camaras')
        ->where('estado', 'Realizado') // Aplicar filtro
        ->orderBy('ID', 'DESC') // Ordenar por fecha de creación, descendente
        ->paginate(2); // Paginar con 15 resultados por página

        $task_pending = DB::select('select * from novedad_camaras where estado = "Pendiente"');
        $task_new = DB::select('select * from novedad_camaras WHERE fecha_novedad BETWEEN CURRENT_DATE-2 AND CURRENT_DATE AND estado = "Pendiente"');
        $task_dead = DB::select('select * from novedad_camaras WHERE fecha_novedad <= CURRENT_DATE-8 AND CURRENT_DATE AND estado = "Pendiente"');        
        $datos_task_camaras = novedad_camaras::all();
        return view('Camaras\6_CamarasTask', compact('task_pending', 'task_done', 'datos_task_camaras', 'task_new', 'task_dead'));
        
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $novedad_camaras = new novedad_camaras();
        $novedad_camaras->interno=$request->post('int-placa');
        $novedad_camaras->conductor=$request->post('conductor');
        $novedad_camaras->fecha_novedad=$request->post('date_activi');
        $novedad_camaras->actividad=$request->post('actividad');
        $novedad_camaras->observaciones=$request->post('observaciones');
        $novedad_camaras->detalle_actividad=$request->post('detalle_actividad');
        $novedad_camaras->tipo=$request->post('tipo');
        $novedad_camaras->creador_tarea=$request->post('creador_tarea');
        $novedad_camaras->circuito=$request->post('circuito');
        $novedad_camaras->memoria=$request->post('memoria');
        $novedad_camaras->camara=$request->post('camara');
        $novedad_camaras->cable=$request->post('cable');
        $novedad_camaras->estado=$request->post('estado');
        $novedad_camaras->soportes=$request->post('soporte');
        $novedad_camaras->created_at=$request->post('date_activi');
        $novedad_camaras->save();
        
        
        return redirect()->route('CamarasTask.index')->with("exito", " La nueva novedad fue registrada con éxito en la base de datos.");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {

        $novedad_camaras = novedad_camaras::find($id);
        return view("Camaras/3_editar_novedad", compact('novedad_camaras'));

    }

    /**
     * Display the specified resource.
     */
    public function show(Liquidador $liquidador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Liquidador $liquidador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $update_task = novedad_camaras::find($id);
        $user = auth()->user();
        $update_task->responsable_tarea = $user->name;
        $update_task->detalle_actividad = 'Se realiza conteo de pasajeros manualmente'; 
        $update_task->estado = 'Realizado'; 
        $update_task->save();
        
        return redirect()->route('CamarasTask.index')->with("tarea_realizada", " La tarea fué REALIZADA con éxito.");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Liquidador $liquidador)
    {
        //
    }
}
