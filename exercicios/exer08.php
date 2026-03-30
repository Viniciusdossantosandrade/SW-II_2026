<?php

function numerosAleatorios() {
    const array = [];
    for (let i = 0; i < 10; i++) {
        
        array.push(Math.floor(Math.random() * 100) + 1);
    }
    return array;
}

?>