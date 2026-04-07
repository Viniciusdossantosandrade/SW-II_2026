<?php

  $conteudo = file_get_contents("produtos.json");
  $produtos = json_decode($conteudo, true);

  $novoProduto = [
    "nome" => "Monitor",
    "preco" => 800.00,
    "quantidade" => 15
];
  $produtos[] = $novoProduto;

  $json = json_encode($produtos);
  file_put_contents("produtos.json", $json);


?>