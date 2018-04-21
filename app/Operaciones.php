<?php

    namespace App;

    class Operaciones
    {
        public function CalcularEuclidesEjercicio1($caec, $eaor, $recintoEstilo_actual){
            $resultado = sqrt( pow(($caec-$recintoEstilo_actual->ca_ec),2) +pow(($eaor - $recintoEstilo_actual->ea_or),2));
            return $resultado;
        }

        public function CalcularEuclidesEjercicio2($estilo_form, $promedio_form, $sexo_form, $estiloSexoPromedioRecinto_actual){
            $arreglo=$this->convertir_estiloSexoPromedioRecinto_numero($estiloSexoPromedioRecinto_actual);
            $resultado = sqrt( pow(($estilo_form-$arreglo[2]),2) +pow(((double)$promedio_form - (double) $estiloSexoPromedioRecinto_actual->promedio),2) + pow(($sexo_form-$arreglo[0]),2));
            return $resultado;
        }

        public function CalcularEuclidesEjercicio3($estilo_form, $promedio_form, $recinto_form, $estiloSexoPromedioRecinto_actual){
            $arreglo=$this->convertir_estiloSexoPromedioRecinto_numero($estiloSexoPromedioRecinto_actual);
            $resultado = sqrt( pow(($estilo_form-$arreglo[2]),2) +pow(((double)$promedio_form - (double) $estiloSexoPromedioRecinto_actual->promedio),2) + pow(($recinto_form-$arreglo[1]),2));
            return $resultado;
        }

        public function CalcularEuclidesEjercicio4($recinto_form, $promedio_form, $sexo_form, $estiloSexoPromedioRecinto_actual){
            $arreglo=$this->convertir_estiloSexoPromedioRecinto_numero($estiloSexoPromedioRecinto_actual);
            $resultado = sqrt( pow(($recinto_form-$arreglo[1]),2) + pow(((double)$promedio_form - (double) $estiloSexoPromedioRecinto_actual->promedio),2)+pow(($sexo_form-$arreglo[0]),2));
            return $resultado;
        }
        
        public function CalcularEuclidesEjercicio5($edad_form, $sexo_form, $autoevaluacion_form, $cantidad_repitiendo_form, $disciplina_form, $experiencia_computadoras_form, $experiencia_tecnologia_web_form, $experiencia_sitio_web_form, $profesor_actual){
            $arreglo=$this->convertir_profesores_numero($profesor_actual);
            $resultado = sqrt( pow(($edad_form-$arreglo[0]),2) + pow(($sexo_form-$arreglo[1]),2)
             + pow(($autoevaluacion_form-$arreglo[2]),2) + pow(($cantidad_repitiendo_form-$arreglo[3]),2)
             + pow(($disciplina_form-$arreglo[4]),2) + pow(($experiencia_computadoras_form-$arreglo[5]),2)
             + pow(($experiencia_tecnologia_web_form-$arreglo[6]),2) + pow(($experiencia_sitio_web_form-$arreglo[7]),2));
            return $resultado;
        }

        public function CalcularEuclidesEjercicio6($confiabilidad_form, $cantidad_enlaces_form, $capacidad_form, $costo_enlaces_form, $red_actual){
            $arreglo=$this->convertir_redes_numero($red_actual);
            $resultado = sqrt( pow(($confiabilidad_form-$arreglo[0]),2) +pow(($cantidad_enlaces_form - $arreglo[1]),2) + pow(($capacidad_form-$arreglo[2]),2)+pow(($costo_enlaces_form-$arreglo[3]),2));
            return $resultado;
        }

        private function convertir_estiloSexoPromedioRecinto_numero($estiloSexoPromedioRecinto_actual){
            $arreglo = array(0, 0, 0);
            switch ($estiloSexoPromedioRecinto_actual->sexo) {
                case 'M':
                    $arreglo[0]=1;
                    break;

                case 'F':
                    $arreglo[0]=2;
                    break;
            }
            switch ($estiloSexoPromedioRecinto_actual->recinto) {
                case 'Paraiso':
                    $arreglo[1]=1;
                    break;

                case 'Turrialba':
                    $arreglo[1]=2;
                    break;
            }
            switch ($estiloSexoPromedioRecinto_actual->estilo) {
                case 'DIVERGENTE':
                    $arreglo[2]=1;
                    break;

                case 'CONVERGENTE':
                    $arreglo[2]=2;
                    break;

                case 'ASIMILADOR':
                    $arreglo[2]=3;
                    break;

                case 'ACOMODADOR':
                    $arreglo[2]=4;
                    break;
            }
            return $arreglo;
        }

        private function convertir_profesores_numero($profesor){
            $arreglo = array(0, 0, 0, 0, 0, 0, 0, 0);
            $arreglo[0]=$profesor->a;
            switch ($profesor->b) {
                case 'M':
                    $arreglo[1]=1;
                    break;

                case 'F':
                    $arreglo[2]=2;
                    break;

                case 'NA':
                    $arreglo[3]=3;
                    break;
            }
            switch ($profesor->c) {
                case 'B':
                    $arreglo[2]=1;
                    break;

                case 'I':
                    $arreglo[2]=2;
                    break;

                case 'A':
                    $arreglo[2]=3;
                    break;
            }
            $arreglo[3]=$profesor->d;
            switch ($profesor->e) {
                case 'DM':
                    $arreglo[4]=1;
                    break;

                case 'ND':
                    $arreglo[4]=2;
                    break;

                case 'O':
                    $arreglo[4]=3;
                    break;
            }
            switch ($profesor->f) {
                case 'L':
                    $arreglo[5]=1;
                    break;

                case 'A':
                    $arreglo[5]=2;
                    break;

                case 'H':
                    $arreglo[5]=3;
                    break;
            }
            switch ($profesor->g) {
                case 'N':
                    $arreglo[6]=1;
                    break;

                case 'S':
                    $arreglo[6]=2;
                    break;

                case 'O':
                    $arreglo[6]=3;
                    break;
            }
            switch ($profesor->h) {
                case 'N':
                    $arreglo[7]=1;
                    break;

                case 'S':
                    $arreglo[7]=2;
                    break;

                case 'O':
                    $arreglo[7]=3;
                    break;
            }
            return $arreglo;
        }

        private function convertir_redes_numero($red){
            $arreglo = array(4);
            $arreglo[0]=$red->reliability;
            $arreglo[1]=$red->links_quantity;
            switch ($red->capacity) {
                case 'Low':
                    $arreglo[2]=1;
                    break;

                case 'Medium':
                    $arreglo[2]=2;
                    break;

                case 'High':
                    $arreglo[2]=3;
                    break;
            }
            switch ($red->cost) {
                case 'Low':
                    $arreglo[3]=1;
                    break;

                case 'Medium':
                    $arreglo[3]=2;
                    break;

                case 'High':
                    $arreglo[3]=3;
                    break;
            }
            return $arreglo;
        }
    }

?>