<?php 
  $produtos = array('produtos' => array(
    array(
        'nome' => 'Bolo',
        'preço' => 10,
        'quantidade' => 21,
    ),
    array(
        'nome' => 'Bala',
        'preço' => 17,
        'quantidade' => 25,
    ),
    array(
        'nome' => 'Carvao',
        'preço' => 23,
        'quantidade' => 11,
    )));

$json_str = json_encode($produtos);

file_put_contents('produtos.json', $produtos);

?>