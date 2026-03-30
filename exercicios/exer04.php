<?php
   function tabuada(numero) {
    const resultados = [];
    for (let i = 1; i <= 10; i++) {
        resultados.push(`${numero} x ${i} = ${numero * i}`);
    }
    return resultados;
}
?>