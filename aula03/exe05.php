<?php
    //Funçoes com parametros e com retorno

    function  mostra_array($vetor){
       foreach ($vetor as $valor) {
          echo $valor . "<br>";
       }
       echo "<hr>";
    }

    $numeros = [1,2,3,4,5];
    $numeros2 = [10,20,30,40,50,60];
    $nomes = ['Fulano','Beltrano','ciclano'];

    mostra_array($numeros);
    mostra_array($numeros2);
    mostra_array($nomes);


?>