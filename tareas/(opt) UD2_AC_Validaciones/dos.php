<?php


//2. Numérico dentro de rango
    function valida_entero($v,  $min, $max) {
      if(filter_var($v, FILTER_VALIDATE_INT, ['options' =>['min_range'=>$min,'max_range' =>$max]])){
          return true;
      }
      return false;
    }