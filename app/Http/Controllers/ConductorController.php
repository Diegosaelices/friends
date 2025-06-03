<?php

namespace App\Http\Controllers;

use App\Models\Conductor;
use Illuminate\Http\Request;

class ConductorController extends Controller
{
    public function index(){
        $ciudadesCM = ['Toledo', 'Ciudad Real', 'Albacete', 'Guadalajara', 'Cuenca'];

        $conductores = Conductor::whereIn('ciudad', $ciudadesCM)->get();

        return view('conductores.index', compact('conductores'));
    }

    public function regalar(Request $request){
        $ciudad = $request->input('ciudad');
    
        // Validar ciudad
        $ciudadesCM = ['Toledo', 'Ciudad Real', 'Albacete', 'Guadalajara', 'Cuenca'];
        if (!in_array($ciudad, $ciudadesCM)) {
        return redirect('/conductores')->with('error', 'Ciudad no válida');
        }

        // Obtener puntos máximos en esa ciudad
        $puntosMax = Conductor::where('ciudad', $ciudad)->max('puntos');

        // Actualizar todos los puntos de esa ciudad al máximo
        Conductor::where('ciudad', $ciudad)->update(['puntos' => $puntosMax]);

        return redirect('/conductores')->with('success', "Puntos actualizados en $ciudad.");
    }

    public function maximizar($id){
        $conductor = Conductor::findOrFail($id);
        $conductor->puntos = 15;
        $conductor->save();

        return redirect('/conductores')->with('success', 'Puntos maximizados.');
    }

    public function eliminar($id){
        Conductor::destroy($id);

        return redirect('/conductores')->with('success', 'Conductor eliminado.');
    }

}
