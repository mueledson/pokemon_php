<?php
    require '../core/conn.php';

    $id = $_GET["id"]; // echo $id;

    $delete = "DELETE FROM itens WHERE id = $id";
    $rs = mysqli_query($con, $delete);
    if($rs == true){
        header('Location: index.php');
        exit;
    }else{
        echo "Error !!!";
    }

    