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