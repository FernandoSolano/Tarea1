<?php

    namespace App;

    class Operaciones
    {
        
        public function CalcularEuclidesRedes($confiabilidad_form, $cantidad_enlaces_form, $capacidad_form, $costo_enlaces_form, $red_actual){
            $arreglo=$this->convertir_redes_numero($red_actual);
            $resultado = sqrt( pow(($confiabilidad_form-$arreglo[0]),2) +pow(($cantidad_enlaces_form - $arreglo[1]),2) + pow(($capacidad_form-$arreglo[2]),2)+pow(($costo_enlaces_form-$arreglo[3]),2));
            return $resultado;
        }

        private function convertir_redes_numero($red){
            $arreglo_red = array(4);
            $arreglo_red[0]=$red->reliability;
            $arreglo_red[1]=$red->links_quantity;
            switch ($red->capacity) {
                case 'Low':
                    $arreglo_red[2]=1;
                    break;

                case 'Medium':
                    $arreglo_red[2]=2;
                    break;

                case 'High':
                    $arreglo_red[2]=3;
                    break;
            }
            switch ($red->cost) {
                case 'Low':
                    $arreglo_red[3]=1;
                    break;

                case 'Medium':
                    $arreglo_red[3]=2;
                    break;

                case 'High':
                    $arreglo_red[3]=3;
                    break;
            }
            return $arreglo_red;
        }
    }

?>