<?php

  $emailBusca = isset($_GET['email']) ? $_GET['email'] : '';

  $conteudo = file_get_contents("usuarios.json");
  $usuarios = json_decode($conteudo, true);

  $usuarioEncontrado = null;
  foreach ($usuarios as $usuario) {
    if ($usuario['email'] == $emailBusca) {
        $usuarioEncontrado = $usuario;
        break;
    }
}

 if ($usuarioEncontrado) {
    echo "Usuário encontrado:<br>";
    echo "ID: " . $usuarioEncontrado['id'] . "<br>";
    echo "Nome: " . $usuarioEncontrado['nome'] . "<br>";
    echo "Email: " . $usuarioEncontrado['email'] . "<br>";
} else {
    echo "Erro: Usuário com email '" . $emailBusca . "' não encontrado.";
}


?>