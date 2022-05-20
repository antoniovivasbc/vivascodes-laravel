<?php 
    include("../conexao/conexao.php");
    $nome = $_GET['name'];
    $id = $_GET['id'];
    $img = array();
    $seleciona = "SELECT * FROM carros WHERE id = '$id'";
    $result = mysqli_query($mysqli,$seleciona);
    $dados = mysqli_fetch_array($result);
    for($i = 1; $i <= 20; $i++){
        $img[$i] = $dados['img'.$i.''];
        if(!empty($img[$i])){
            unlink("../veiculos/$id/$img[$i]");
        }
    }
    rmdir("../veiculos/$id");
    $deleta = "DELETE FROM carros WHERE id = '$id'";
    $result = mysqli_query($mysqli, $deleta);
    echo"<script> alert('Carro removido com sucesso') </script>";
    $url = "../remover.php?name=$nome&id=0";
    echo '<script> window.location = "'.$url.'";</script>';
?>