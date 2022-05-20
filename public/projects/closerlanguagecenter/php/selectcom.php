<?php
    include("../conexao/conexao.php");
    $mysqli = new mysqli($host, $usuario, $senha, $bd);
    header('Content-Type: application/json');
    $select = "SELECT * FROM comment";
    $result = mysqli_query($mysqli, $select);
    $data = mysqli_fetch_all($result);
    echo json_encode($data);
?>