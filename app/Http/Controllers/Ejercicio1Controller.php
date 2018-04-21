<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RecintoEstilo;
use App\Operaciones;

class Ejercicio1Controller extends Controller
{
    //
    function calcular(){
        $operaciones = new Operaciones();
        $recintoEstilos=RecintoEstilo::all();//Se obtienen todos los registros de las tablas
        //Se obtienen parámetros del formulario
        $caec = request('caec');
        $eaor = request('eaor');

        $registro_mas_cercano="";
        $distancia_mas_cercana="";
        $initial_flag=0;
        foreach ($recintoEstilos as $recintoEstilo_actual){
            $distancia_actual=$operaciones->CalcularEuclidesEjercicio1($caec, $eaor, $recintoEstilo_actual);//Calcular la distancia e ir almacenandola para luego ir comparandola
            if($initial_flag==0){
                //debe hacerlo solamente la primer vez
                $distancia_mas_cercana=$distancia_actual;
                $registro_mas_cercano=$recintoEstilo_actual;
                $initial_flag=1;
            }            
            if($distancia_actual==0){
                $resultado=$registro_mas_cercano->estilo;
                return view('formularios.ejercicio_1', compact('resultado'));
            }else if($distancia_actual<$distancia_mas_cercana){
                $distancia_mas_cercana=$distancia_actual;
                $registro_mas_cercano=$recintoEstilo_actual;
            }
        }
        $resultado=$registro_mas_cercano->estilo;
        return view('formularios.ejercicio_1', compact('resultado'));
    }
}
