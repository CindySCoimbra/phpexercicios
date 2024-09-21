<?php 
$pares = 1;

while($pares <= 20){
    if($pares %2 ==0){
        echo $pares;
        if($pares <20){
            echo ", ";
        }
    }
    $pares ++;   
}
?>