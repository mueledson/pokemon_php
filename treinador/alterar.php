<?php

require '../core/conn.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$carteira = $_POST['carteira'];

$update = " UPDATE tb_jogador SET nome = '$nome', carteira='$carteira' WHERE id = $id";
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
<a href="form.php">Voltar</a>