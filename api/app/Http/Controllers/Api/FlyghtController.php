<?php

namespace App\Http\Controllers\Api;

use App\Models\Flyght;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FlyghtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Lamamos a todos los registros de la tabla
        $flyghts = Flyght::all();
        return $flyghts;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $flyght = Flyght::find($id);
        return $flyght;
    }

    /**
     * Display the specified resource.
     */
    public function search(Request $request)
    {
        $validatedData = $request->validate([
            'salida' => 'required|string|min:2',
            'destino' => 'required|string|min:2',
        ]);

        $flyghts = Flyght::where('ciudadSalida', 'LIKE', '%' . $validatedData['ciudadSalida'] . '%')
            ->where('ciudadDestino', 'LIKE', '%' . $validatedData['ciudadDestino'] . '%')
            ->get();

        // Agrega esta línea para ver la salida de la consulta
        dd($flyghts);

        return response()->json($flyghts);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $flyght = Flyght::destroy($id);
        return $flyght;
    }
}
