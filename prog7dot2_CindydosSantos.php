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
    <p>Usando a expressão while, escreva um código em PHP que exiba os números de 20 a 1 em ordem decrescente, separados por vírgula.
    </header>
    <section>
        <p> Código: </p>
        <pre>
        &lt;?php 
            $valor = 20;
            while ($valor >= 1) {
                echo $valor;
                if ($valor > 1) {
                    echo ", ";
                }
                $valor--;
            }
        ?&gt;
        </pre>
    </section>
    <section>
        <p>Resposta: </p>
         <?php
            $valor = 20;
            while ($valor >= 1) {
                echo $valor;
                if ($valor > 1) {
                    echo ", ";
                }
                $valor--;
            }
         ?>
    </section>
    
</body>
</html>