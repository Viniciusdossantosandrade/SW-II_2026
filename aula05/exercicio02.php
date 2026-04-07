<?php
   $conteudo = file_get_contents("usuarios.json");
   $dados = json_decode($conteudo, true);

   echo "<h2>Lista de Usuários</h2>";
   foreach ($usuarios as $usuario) {
    echo "Nome: " . $usuario['nome'] . " - Email: " . $usuario['email'] . "<br>";
    
}

?>