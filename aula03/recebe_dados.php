<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebe dados</title>
</head>
<body>
    <?php
        //$nome = $_POST['nome'];
        $nome = htmlspecialchars($_POST['nome']);
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        
        $ano_atual = date('Y');
        $ano = $ano_atual - $idade;
        //echo $ano_atual;

    ?>
    <p>O nome é: <?php echo $nome; ?> </p>
    <p>O email é: <?php echo $email; ?> </p>
    <p>A idade é: <?php echo $idade; ?> </p>

    <p>Ahh entao voce nasceu em <?php echo $ano; ?> </p>

     <?php
     if($idade < 18) {
       echo "<p style='color:blue;'> VOCE E MENOR DE IDADE</p>";
     }else{
        echo "<p style='color:red;'> VOCE E MAIOR DE IDADE</p>";
     }
     ?>

    


</body>
</html>