<?php
    require '../core/conn.php';

    $id = $_GET["id"]; // echo $id;

    $delete = "DELETE FROM tb_pokemon WHERE id = $id";
    $rs = mysqli_query($con, $delete);
    if($rs == true){
        header('Location: index.php');
        exit;
    }else{
        echo "Error !!!";
    }

    