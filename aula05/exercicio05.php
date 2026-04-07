<?php

  $conteudo = file_get_contents("produtos.json");
  $produtos = json_decode($conteudo, true);

  $nomeRemover = "Mouse"; 

foreach ($produtos as $indice => $produto) {
    if ($produto['nome'] == $nomeRemover) {
        unset($produtos[$indice]);
        echo "Produto '" . $nomeRemover . "' removido com sucesso!<br>";
        break;
    }
}

  $produtos = array_values($produtos);

  $json = json_encode($produtos);
  file_put_contents("produtos.json", $json);


?>