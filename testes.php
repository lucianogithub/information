<?php

    $nome = 'Luciano de Oliveira Paula';
    $nome = explode(' ',$nome);
    
    $sobrenome="";
    foreach ($nome as $key => $value) {
        if($key!=0){
            $sobrenome .= $value." ";
        }        
    }
    echo $sobrenome;

?>