<?php
    $nombre = $_POST['nombre']; 
    $max = 5;
    $min = 0;
    $alea = rand ($min, $max);
    
        if($nombre == $alea) {
            echo <a href="javascript:history.back()">Recommencez</a>;
        }else{
            echo "Pas le bon!";
        }
    ?>
