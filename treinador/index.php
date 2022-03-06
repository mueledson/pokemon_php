<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=form, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Form</title>
</head>
<body>
    <form action="inserir.php" method="post">
        <input type="text" name="nome" placeholder="nome" required>
        <input type="text" name="carteira" placeholder="carteira" required>
        <input type="submit" value="Cadastrar">
    </form>
    <div>
        <?php
            require '../core/conn.php';
            $sql = "SELECT * FROM tb_jogador ORDER BY id desc";
            $rs = mysqli_query($con, $sql);

          //while($data = mysqli_fetch_assoc($rs)){
            while($data = mysqli_fetch_assoc($rs)){
                $id_treinador = $data['id'];
                $nome = $data['nome'];
                $carteira = $data['carteira'];
                echo "
                    <hr />
                         ID: " . $id_treinador . "<br>" .
                        "Nome: " . $nome . "<br>" .
                        "Carteira: " . $carteira  .
                    "<br />";
        ?>
                <a class="excluir-treinador" href="excluir.php?id=<?=$id_treinador?>">Excluir</a> |
                <a class="atualizar-treinador" href="atualizar.php?id=<?=$id_treinador?>">Atualizar</a>
                <?php
            }
        ?>
        <!-- ID: " . $id_treinador . "<br>" .
                        "Nome: " . $nome . "<br>" .
                        "Carteira: " . $carteira  . -->
    </div>
</body>
</html>