<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SensorData;

class SensorController extends Controller
{
    public function store(Request $request)
    {
        SensorData::create([
            'luminosity' => $request->luminosidade,
            'rain' => $request->rain,
            'temperature' => $request->temperature,
            'humidity' => $request->humidity,
    ]);
            
        

    

        // Retornar uma resposta de sucesso
        return response()->json(['message' => 'Dados salvos com sucesso'], 200);
    }
}
