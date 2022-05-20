<?php
    $host = "localhost";
    $usuario = "closerla_antonio";
    $senha = "12345";
    $bd = "closerla_closerlanguage";
    $mysqli = new mysqli($host, $usuario, $senha, $bd);
    header('Content-Type: application/json');
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $date = $_POST['date'];
    if(!empty($comment)){
        $send = "INSERT INTO comment (_name, comment, today) VALUES ('$name', '$comment', '$date')";
        $result = mysqli_query($mysqli, $send);
        echo json_encode($result);
    }
?>