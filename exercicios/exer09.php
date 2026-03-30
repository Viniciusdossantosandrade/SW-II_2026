<?php
    function fatorial(numero) {
    if (numero < 0) {
        return "Fatorial não definido para números negativos";
    }
    
    let resultado = 1;
    for (let i = 1; i <= numero; i++) {
        resultado *= i;
    }
    return resultado;
}


function fatorialRecursivo(numero) {
    if (numero < 0) {
        return "Fatorial não definido para números negativos";
    }
    if (numero === 0 || numero === 1) {
        return 1;
    }
    return numero * fatorialRecursivo(numero - 1);
}


const numerosAleatoriosArrow = () => Array.from({ length: 10 }, () => Math.floor(Math.random() * 100) + 1);

const fatorialArrow = (numero) => {
    if (numero < 0) return "Fatorial não definido para números negativos";
    if (numero === 0 || numero === 1) return 1;
    return numero * fatorialArrow(numero - 1);
};


console.log(numerosAleatorios()); 

console.log(fatorial(5)); 
console.log(fatorial(0)); 
console.log(fatorial(7)); 
console.log(fatorial(-3)); 

console.log(fatorialRecursivo(5));
   


?>