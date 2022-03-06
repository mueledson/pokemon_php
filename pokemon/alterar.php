<?php

require '../core/conn.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$ataque = $_POST['ataque'];
$nivel = $_POST['nivel'];

$update = " UPDATE tb_pokemon SET nome = '$nome', tipo = '$tipo', ataque = '$ataque', nivel = '$nivel' WHERE id = $id";
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