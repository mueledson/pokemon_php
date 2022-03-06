<?php
$srv = "mysql745.umbler.com:41890";
$usr = "seb_admin";
$key = "2020Admin";
$db = "escola_graus";

try{
    $con = mysqli_connect($srv, $usr, $key, $db);
    //echo "conexão realizada com sucesso ";
    //var_dump($con);
}catch(SQLException $e){
    echo $e->getMessage();
    echo $e->getCode();
    echo $e->getLine();
    echo $e->getFile();
}