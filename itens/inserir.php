<?php
    require '../core/conn.php';
    //validar $_POST
    $tipo = $_POST['tipo'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];
    $quantidade = $_POST['quantidade'];

    //$itens = [$tipo,$preco,$descricao,$quantidade];

    $inserir = "INSERT INTO itens(tipo, preco, descricao, quantidade) VALUES('$tipo', '$preco', '$descricao', '$quantidade')";
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