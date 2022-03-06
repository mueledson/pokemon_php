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
        <input type="text" name="tipo" placeholder="tipo" required>
        <input type="text" name="preco" placeholder="preco" required>
        <input type="text" name="descricao" placeholder="descricao" required>
        <input type="text" name="quantidade" placeholder="qtd" required>
        <input type="submit" value="Cadastrar">
    </form>
    <div>
        <?php
            require '../core/conn.php';
            $sql = "SELECT * FROM itens ORDER BY id desc";
            $rs = mysqli_query($con, $sql);

          //while($data = mysqli_fetch_assoc($rs)){
            while($data = mysqli_fetch_assoc($rs)){
                $id_item = $data['id'];
                $tipo = $data['tipo'];
                $preco = $data['preco'];
                $descricao = $data['descricao'];
                $quantidade = $data['quantidade'];
                
                echo "
                    <hr />
                         ID: " . $id_item . "<br>" .
                        "tipo: " . $tipo . "<br>" .
                        "Preco: " . $preco . "<br>" .
                        "descricao: " . $descricao . "<br>" .
                        "Quantidade: " . $quantidade . "<br>" .
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