<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=form, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Atualização do Cadastro</h1>
        <?php
            // Carrega os dados
            require '../core/conn.php';
            $id = $_GET['id']; //echo $id;
            $update = "SELECT * FROM tb_jogador WHERE id = $id";
            $rs = mysqli_query($con, $update);
            $data = mysqli_fetch_assoc($rs);
            //print_r($data);
        ?>
    <form action="alterar.php" method="post">
        <input type="hidden" name="id" value="<?=$data['id'] ?>">
        <input type="text" name="nome" placeholder="nome" value=" <?=$data['nome'] ?>">
        <input type="number" name="carteira" placeholder="carteira" value=" <?=$data['carteira'] ?>">
        <input type="submit" value="Atualizar">
        <a href="index.php">Cancelar</a>
    </form>
</body>
</html>