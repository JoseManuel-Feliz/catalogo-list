<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatologoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $objects = Object::all();
        return view('admin.catalogo.index', compact('objects'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.catalogo.create');
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
    public function show(string $id)
    {
        return view('admin.catalogo.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.catalogo.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}