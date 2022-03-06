<?php
    require '../core/conn.php';
    //validar $_POST
    $nome = $_POST['nome'];
    $carteira = $_POST['carteira'];

    //$user = [$nome, $carteira, $sexo, $senha];

    $inserir = "INSERT INTO tb_jogador(nome, carteira) VALUES('$nome', '$carteira')";
    $rs = mysqli_query($con, $inserir);
    //print_r($user);

    if($rs == true){
        echo "Cadastrado com sucesso";
        header('Location: index.php');
        exit;
    }else{
        echo "Não cadastrou!!! ";
    }
    ?>
    <br>
    <a href="index.php">Voltar</a>