<?php
    $numero = 30;
    if($numero % 3 == 0 && $numero % 5 == 0){
        echo  $numero . " é multiplo de 3 e de 5";
    }else if($numero % 3 == 0){
        echo $numero . " é multiplo de 3";
    }else if($numero % 5 == 0){
        echo $numero . " é multiplo de 5";
    }else{
        echo $numero . " não é multiplo nem de 3 nem de 5";
    }
?>