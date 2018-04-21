<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Redes;
use App\Operaciones;

class Ejercicio6Controller extends Controller
{
    //
    function calcular(){
        $operaciones = new Operaciones();
        $redes=Redes::all();//Se obtienen todos los registros de las tablas
        //Se obtienen parámetros del formulario
        $confiabilidad_form = request('confiabilidad');
        $cantidad_enlaces_form = request('cantidad_enlaces');
        $capacidad_form = request('capacidad');
        $costo_enlaces_form = request('costo_enlaces');

        $registro_mas_cercano="";
        $distancia_mas_cercana="";
        $contador=0;
        foreach ($redes as $red_actual){
            $distancia_actual=$operaciones->CalcularEuclidesEjercicio6($confiabilidad_form, $cantidad_enlaces_form, $capacidad_form, $costo_enlaces_form, $red_actual);//Calcular la distancia e ir almacenandola para luego ir comparandola
            if($contador==0){
                //debe hacerlo solamente la primer vez
                $distancia_mas_cercana=$distancia_actual;
                $registro_mas_cercano=$red_actual;
                $contador=1;
            }            
            if($distancia_actual==0){
                $resultado=$registro_mas_cercano->class;
                return view('formularios.ejercicio_6', compact('resultado'));
            }else if($distancia_actual<$distancia_mas_cercana){
                $distancia_mas_cercana=$distancia_actual;
                $registro_mas_cercano=$red_actual;
            }
        }
        $resultado=$registro_mas_cercano->class;
        return view('formularios.ejercicio_6', compact('resultado'));
    }
}
