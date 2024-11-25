<?php

namespace App\Http\Controllers;

use App\Models\novedad_camaras;
use Illuminate\Http\Request;
use Illuminate\Http\Request\hash_file;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class LiquidadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Liquidador\1_Home');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, Liquidador $liquidador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Liquidador $liquidador)
    {
        //
    }
}
