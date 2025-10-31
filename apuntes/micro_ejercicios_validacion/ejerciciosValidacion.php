<?php

//1. No vacio obligatorio

    function valida_obligatorio($v) {
        if(is_string($v)) {
            $v = trim($v);
        }
        if(!isset($v) || strlen($v) == 0){
            return false;
        }
        return true;
    }

//2. Numérico dentro de rango
    function valida_entero($v,  $min, $max) {
      if(filter_var($v, FILTER_VALIDATE_INT, ['options' =>['min_range'=>$min,'max_range' =>$max]])){
          return true;
      }
      return false;
    }

    //3.Float poisitivo con coma o punto

function valida_float_positivo($v) {

        if((float)$v > 0) {


        }
        str_replace();
        is_numeric();
}

//4. Email

function valida_email($v) {


}