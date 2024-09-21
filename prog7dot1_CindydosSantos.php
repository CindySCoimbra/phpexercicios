<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta 07</title>
</head>
<body>
    <header>
    <h4>&#9763; Atividade 01 &#9763; </h4>
    <p>Usando a expressão for, escreva um código em PHP que conte e exiba a quantidade de números pares e a quantidade de números ímpares no intervalo de 1 a 20.
    </header>
    <section>
        <p> Código: </p>
        <pre>
        &lt;?php 
        $valorespares = 0;
        $valorespares = 0;

        for ($contador = 1; $contador <= 20; $contador++) {
            if ($contador % 2 == 0) {
                $valorespares++;
            } else {
                $valorespares++;
            }
        }

        echo "Pares- $valorespares <br>";
        echo "Impares- $valorespares";

        ?&gt;
        </pre>
    </section>
    <section>
        <p>Resposta: </p>
        <?php

        $valorespares = 0;
        $valorespares = 0;

        for ($contador = 1; $contador <= 20; $contador++) {
            if ($contador % 2 == 0) {
                $valorespares++;
            } else {
                $valorespares++;
            }
        }

        echo "Pares- $valorespares <br>";
        echo "Impares- $valorespares";
        ?>
    </section>
    
</body>
</html>