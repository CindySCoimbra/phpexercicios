<?php 
    for($x = 1; $x <=10; $x++){
        if($x %2 == 0){
            echo "$x - esse numero é par <br>";
            continue; 
        }
        echo "$x <br>";
    }
?>