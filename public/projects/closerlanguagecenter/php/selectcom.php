<?php
    $host = "localhost";
    $usuario = "closerla_antonio";
    $senha = "12345";
    $bd = "closerla_closerlanguage";
    $mysqli = new mysqli($host, $usuario, $senha, $bd);
    header('Content-Type: application/json');
    $select = "SELECT * FROM comment";
    $result = mysqli_query($mysqli, $select);
    $data = mysqli_fetch_all($result);
    echo json_encode($data);
?>