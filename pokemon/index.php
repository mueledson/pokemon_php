<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=form, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="inserir.php" method="post">
        <input type="text" name="nome" placeholder="nome" required>
        <input type="text" name="tipo" placeholder="tipo" required>
        <input type="text" name="ataque" placeholder="ataque" required>
        <input type="text" name="nivel" placeholder="nivel" required>
        <input type="submit" value="Cadastrar">
    </form>
    <div>
        <?php
            require '../core/conn.php';
            $sql = "SELECT * FROM tb_pokemon ORDER BY id desc";
            $rs = mysqli_query($con, $sql);

          //while($data = mysqli_fetch_assoc($rs)){
            while($data = mysqli_fetch_assoc($rs)){
                $id_item = $data['id'];
                $nome = $data['nome'];
                $tipo = $data['tipo'];
                $ataque = $data['ataque'];
                $nivel = $data['nivel'];
                
                echo "
                    <hr />
                         ID: " . $id_item . "<br>" .
                        "nome: " . $nome . "<br>" .
                        "Tipo: " . $tipo . "<br>" .
                        "ataque: " . $ataque . "<br>" .
                        "Nivel: " . $nivel . "<br>" .
                    "<br />";
        ?>
                <a href="excluir.php?id=<?=$id_item?>">Excluir</a> |
                <a href="atualizar.php?id=<?=$id_item?>">Atualizar</a>
                <?php
            }
        ?>
        
    </div>
</body>
</html>