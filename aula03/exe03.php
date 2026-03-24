<?php
    //Funçoes com parametros e sem retorno
    function  calcula_quadrado($a){

    $x = $a * $a;

        echo "$x <br>";
    }

    calcula_quadrado(4);
    calcula_quadrado(3);
    calcula_quadrado(5);

    echo "<hr>";

    function  soma($x,$y){
        $soma = $x * $y;

        echo "A soma é: $soma <br>";
    }

    $num1 = 8;
    $num2 = 7;

    soma($num1,$num2);

?>