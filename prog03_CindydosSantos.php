<?php
$valor = 1;

while($valor <= 100){
    if ($valor %2 == 0){
        echo $valor;
    
        if ($valor < 100){
            echo ",";
        }
    }
    $valor++;
}
?>