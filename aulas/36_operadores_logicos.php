<?php

    $a = 2;
    $b = 2;

    if (!$a == $b && $a == 3){ //NOT nega o valor de uma variável tornando ela FALSE
        echo "No IF";
    } else {
        echo "No ELSE";
    }
    
    if (($a == $b && $a == 3) || $b == 2){
        echo "No IF";
    } else {
        echo "No ELSE";
    }

    if ($a != $b OR $a == 3){
        echo "No IF";
    } else {
        echo "No ELSE";
    }

    if ($a != $b || $a == 3){ //Equivale ao OR
        echo "No IF";
    } else {
        echo "No ELSE";
    }

    if ($a == $b AND $a == 3){
        echo "No IF";
    } else {
        echo "No ELSE";
    }

    if ($a == $b && $a == 3){ //Equivale ao AND
        echo "No IF";
    } else {
        echo "No ELSE";
    }
