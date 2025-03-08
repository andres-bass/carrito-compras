<?php

namespace App\Http\Controllers;

use App\Models\JsonData;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    // Obtener y procesar los datos del JSON usando el modelo
    $data = JsonData::processJsonData();

    // Verificar si hay datos
    if (empty($data)) {
        return response()->json(['error' => 'Archivo JSON no encontrado o está vacío'], 404);
    }

    // Retornar la respuesta con los datos procesados
    return response()->json([
        'message' => 'Datos procesados correctamente',
        'data' => $data
    ]);
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
        //
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
