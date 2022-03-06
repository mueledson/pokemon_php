<?php
    require '../core/conn.php';
    //validar $_POST
    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $ataque = $_POST['ataque'];
    $nivel = $_POST['nivel'];

    //$itens = [$tipo,$preco,$descricao,$quantidade];

    $inserir = "INSERT INTO tb_pokemon(nome, tipo, ataque, nivel) VALUES('$nome', '$tipo', '$ataque', '$nivel')";
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