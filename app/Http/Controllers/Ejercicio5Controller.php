<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profesores;
use App\Operaciones;

class Ejercicio5Controller extends Controller
{
    //
    function calcular(){
        $operaciones = new Operaciones();
        $profesores=Profesores::all();//Se obtienen todos los registros de las tablas
        //Se obtienen parámetros del formulario
        $edad_form = request('edad');
        $sexo_form = request('sexo');
        $autoevaluacion_form = request('autoevaluacion');
        $cantidad_repitiendo_form = request('cantidad_repitiendo');
        $disciplina_form = request('disciplina');
        $experiencia_computadoras_form = request('experiencia_computadoras');
        $experiencia_tecnologia_web_form = request('experiencia_tecnologia_web');
        $experiencia_sitio_web_form = request('experiencia_sitio_web');

        $registro_mas_cercano="";
        $distancia_mas_cercana="";
        $contador=0;
        foreach ($profesores as $profesor_actual){
            $distancia_actual=$operaciones->CalcularEuclidesEjercicio5($edad_form, $sexo_form, $autoevaluacion_form, $cantidad_repitiendo_form, $disciplina_form, $experiencia_computadoras_form, $experiencia_tecnologia_web_form, $experiencia_sitio_web_form, $profesor_actual);//Calcular la distancia e ir almacenandola para luego ir comparandola
            if($contador==0){
                //debe hacerlo solamente la primer vez
                $distancia_mas_cercana=$distancia_actual;
                $registro_mas_cercano=$profesor_actual;
                $contador=1;
            }            
            if($distancia_actual==0){
                $resultado=$registro_mas_cercano->class;
                return view('formularios.ejercicio_5', compact('resultado'));
            }else if($distancia_actual<$distancia_mas_cercana){
                $distancia_mas_cercana=$distancia_actual;
                $registro_mas_cercano=$profesor_actual;
            }
        }
        $resultado=$registro_mas_cercano->class;
        return view('formularios.ejercicio_5', compact('resultado'));
    }
}
