<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Solo me hizo falta mostrar la vista
    public function ejercicio1(){
        return view('pages.ejercicio1');
    }

    public function calculos(Request $request){

        $request->validate([
            'capital'=>'required|numeric',
            'tasa'=> 'required|numeric',
            'cuota'=>'required|numeric'
        ]);

        $capital = $request['capital'];
        $tasa = $request['tasa'] / 100;
        $cuota = $request['cuota'];

        $P = $cuota * ((1 - pow(1 + $tasa, -$capital)) / $tasa);

        $tabla = [];
        $saldo = $P;

        for ($i = 1; $i <= $capital; $i++) {
            $interes = $saldo * $tasa;
            $principal = $cuota - $interes;
            $saldo = $saldo - $principal;

            $tabla[] = [
                'periodo' => $i,
                'cuota' => $cuota,
                'interes' => $interes,
                'principal' => $principal,
                'saldo' => max(0, $saldo)
            ];
        }

        return view('pages.resultado', compact('tabla', 'P'));
    }
    public function faltoCrearLaVista(){
        
    }
}
