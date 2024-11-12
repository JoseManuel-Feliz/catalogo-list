<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catalogos = Catalogo::all();
        return view('admin.list.index', compact('catalogos'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $catalogos = Catalogo::all();
        return view('admin.catalogo.create', compact('catalogos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $catalogo = Catalogo::create($data);

        return redirect()->route('admin.catalogo.show', $catalogo->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $catalogo = Catalogo::findOrFail($id);
        return view('admin.catalogo.show', compact('catalogo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $catalogo = Catalogo::findOrFail($id);

        return view('admin.catalogo.edit', compact('catalogo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $catalogo = Catalogo::findOrFail($id);
        $catalogo->update($data);
        return redirect()->route('admin.catalogo.index', $catalogo->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $catalogo = Catalogo::findOrFail($id);
        return redirect()->route('admin.catalogo.index', $catalogo->id);
    }
}
