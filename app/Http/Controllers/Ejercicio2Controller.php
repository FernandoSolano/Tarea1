<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EstiloSexoPromedioRecinto;
use App\Operaciones;

class Ejercicio2Controller extends Controller
{
    //
    function calcular(){
        $operaciones = new Operaciones();
        $estiloSexoPromedioRecintos=EstiloSexoPromedioRecinto::all();//Se obtienen todos los registros de las tablas
        //Se obtienen parámetros del formulario
        $estilo_form = request('estilo');
        $promedio_form = request('promedio');
        $sexo_form = request('sexo');

        $registro_mas_cercano="";
        $distancia_mas_cercana="";
        $contador=0;
        foreach ($estiloSexoPromedioRecintos as $estiloSexoPromedioRecinto_actual){
            $distancia_actual=$operaciones->CalcularEuclidesEjercicio2($estilo_form, $promedio_form, $sexo_form, $estiloSexoPromedioRecinto_actual);//Calcular la distancia e ir almacenandola para luego ir comparandola
            if($contador==0){
                //debe hacerlo solamente la primer vez
                $distancia_mas_cercana=$distancia_actual;
                $registro_mas_cercano=$estiloSexoPromedioRecinto_actual;
                $contador=1;
            }            
            if($distancia_actual==0){
                $resultado=$registro_mas_cercano->recinto;
                return view('formularios.ejercicio_2', compact('resultado'));
            }else if($distancia_actual<$distancia_mas_cercana){
                $distancia_mas_cercana=$distancia_actual;
                $registro_mas_cercano=$estiloSexoPromedioRecinto_actual;
            }
        }
        $resultado=$registro_mas_cercano->recinto;
        return view('formularios.ejercicio_2', compact('resultado'));
    }
}
