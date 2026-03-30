<?php

   function somaArray(numeros) {
    let soma = 0;
    for (let i = 0; i < numeros.length; i++) {
        soma += numeros[i];
    }
    return soma;
}


boasVindas("Maria");

console.log(diferenca(10, 3)); // 7

console.log(parOuImpar(7)); // Ímpar
console.log(parOuImpar(8)); // Par

console.log(tabuada(5));

console.log(somaArray([1, 2, 3, 4, 5]));


?>