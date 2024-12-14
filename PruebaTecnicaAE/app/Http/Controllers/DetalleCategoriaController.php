<?php

namespace App\Http\Controllers;

use App\Models\DetalleCategoria;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DetalleCategoriaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DetalleCategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $detalleCategorias = DetalleCategoria::paginate();

        return view('detalle-categoria.index', compact('detalleCategorias'))
            ->with('i', ($request->input('page', 1) - 1) * $detalleCategorias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $detalleCategoria = new DetalleCategoria();
        $productos = Producto::all();
        $categorias = Categoria::all();
        return view('detalle-categoria.create', compact('detalleCategoria', 'productos', 'categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DetalleCategoriaRequest $request): RedirectResponse
    {
        DetalleCategoria::create($request->validated());

        return Redirect::route('detalle-categorias.index')
            ->with('success', 'DetalleCategoria created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $detalleCategoria = DetalleCategoria::find($id);

        return view('detalle-categoria.show', compact('detalleCategoria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $detalleCategoria = DetalleCategoria::find($id);
        $productos = Producto::all();
        $categorias = Categoria::all();
        return view('detalle-categoria.edit', compact('detalleCategoria', 'productos', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DetalleCategoriaRequest $request, DetalleCategoria $detalleCategoria): RedirectResponse
    {
        $detalleCategoria->update($request->validated());

        return Redirect::route('detalle-categorias.index')
            ->with('success', 'DetalleCategoria updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        DetalleCategoria::find($id)->delete();

        return Redirect::route('detalle-categorias.index')
            ->with('success', 'DetalleCategoria deleted successfully');
    }
}
