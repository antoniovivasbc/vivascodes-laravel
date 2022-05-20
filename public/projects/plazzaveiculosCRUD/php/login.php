<?php
    $submit = filter_input(INPUT_POST, 'submit', FILTER_SANITIZE_STRING);
    if($submit){
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
        $login = "SELECT * FROM login WHERE nome = '$nome' and senha = '$senha'";
        $resultado = mysqli_query($mysqli, $login);
        $row = mysqli_num_rows($resultado);
        if($row == 1){
            $_SESSION["user"] = true;
            $url = "plazzaveiculosCRUD/adicionar.php?name=$nome";
            echo '<script> window.location = "'.$url.'";</script>';
        }else{
            $_SESSION["user"] = false;
        }
    }
?>