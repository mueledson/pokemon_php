<?php

require '../core/conn.php';

$id = $_POST['id'];
$tipo = $_POST['tipo'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$quantidade = $_POST['quantidade'];

$update = " UPDATE itens SET tipo = '$tipo', preco='$preco', descricao='$descricao', quantidade='$quantidade' WHERE id = $id";
$rs = mysqli_query($con, $update);

if($rs == true){
    echo "Cadastrado com sucesso";
    header('Location: index.php');
    exit;
}else{
    echo "Não cadastrou!!! ";
}
?>
<br>
<a href="atualizar.php">Voltar</a>