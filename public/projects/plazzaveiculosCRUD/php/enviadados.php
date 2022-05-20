<?php
    include("../conexao/conexao.php");
    $nome = $_GET['name'];
    $submit = filter_input(INPUT_POST, 'submit', FILTER_SANITIZE_STRING);
    $nome_exibicao = filter_input(INPUT_POST, 'nome_exibicao', FILTER_SANITIZE_STRING);
    $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_STRING);
    $quilometragem = filter_input(INPUT_POST, 'quilometragem', FILTER_SANITIZE_STRING);
    $ano_fab = filter_input(INPUT_POST, 'ano_fab', FILTER_SANITIZE_STRING);
    $ano_modelo = filter_input(INPUT_POST, 'ano_modelo', FILTER_SANITIZE_STRING);
    $marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_STRING);
    $modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_STRING);
    $cor = filter_input(INPUT_POST, 'cor', FILTER_SANITIZE_STRING);
    $potencia = filter_input(INPUT_POST, 'potencia', FILTER_SANITIZE_STRING);
    $cambio = filter_input(INPUT_POST, 'cambio', FILTER_SANITIZE_STRING);
    $combustivel = filter_input(INPUT_POST, 'combustivel', FILTER_SANITIZE_STRING);
    $direcao = filter_input(INPUT_POST, 'direcao', FILTER_SANITIZE_STRING);    
    $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
    $air_bag = filter_input(INPUT_POST, 'air-bag', FILTER_SANITIZE_STRING);
    $ar_condicionado = filter_input(INPUT_POST, 'ar-condicionado', FILTER_SANITIZE_STRING);
    $trava_eletrica = filter_input(INPUT_POST, 'trava-eletrica', FILTER_SANITIZE_STRING);
    $vidro_eletrico = filter_input(INPUT_POST, 'vidro-eletrico', FILTER_SANITIZE_STRING);
    $som = filter_input(INPUT_POST, 'som', FILTER_SANITIZE_STRING);
    $camera_re = filter_input(INPUT_POST, 'camera-re', FILTER_SANITIZE_STRING);
    $blindado = filter_input(INPUT_POST, 'blindado', FILTER_SANITIZE_STRING);
    $direcao_hidraulica = filter_input(INPUT_POST, 'direcao-hidraulica', FILTER_SANITIZE_STRING);
    $direcao_eletrica = filter_input(INPUT_POST, 'direcao-eletrica', FILTER_SANITIZE_STRING);
    $retrovisor_eletrico = filter_input(INPUT_POST, 'retrovisor-eletrico', FILTER_SANITIZE_STRING);
    $banco_couro = filter_input(INPUT_POST,'bando-de-couro', FILTER_SANITIZE_STRING);
    $imagem = array();
    for($i = 1; $i <= 20; $i++){
        $imagem[$i] = $_FILES['img'.$i.'']['name'];
        $file_ext[$i] = substr($imagem[$i], strripos($imagem[$i], "."));
    }
    
    $enviadados = "INSERT INTO carros (nome_exibicao, preco, quilometragem, ano_fab, ano_modelo, marca, modelo, cor, potencia, cambio, combustivel, direcao, descricao, air_bag, ar_condicionado, trava_eletrica, vidro_eletrico, som, camera_re, blindado, direcao_hidraulica, direcao_eletrica, retrovisor_eletrico, banco_couro) 
    VALUES ('$nome_exibicao', '$preco', '$quilometragem', '$ano_fab', '$ano_modelo', '$marca', '$modelo', '$cor', '$potencia', '$cambio', '$combustivel', '$direcao', '$descricao', '$air_bag', '$ar_condicionado', '$trava_eletrica', '$vidro_eletrico', '$som', '$camera_re', '$blindado', '$direcao_hidraulica', '$direcao_eletrica', '$retrovisor_eletrico', '$banco_couro')";
    $result = mysqli_query($mysqli, $enviadados);
    $seleciona_linha = "SELECT MAX(id) AS id from carros";
    $result = mysqli_query($mysqli, $seleciona_linha);
    $dados = mysqli_fetch_array($result);
    $id = $dados['id'];
    mkdir("../veiculos/$id");
    $_UP['pasta'] = "../veiculos/$id/";
    for($i = 1; $i <= 20; $i++){
        $img = 'img'.$i.'';
        if(move_uploaded_file($_FILES['img'.$i.'']["tmp_name"], $_UP['pasta']. "$i$file_ext[$i]")){
            $update = "UPDATE carros SET $img = '$i$file_ext[$i]' WHERE id = '$id'";
            $result = mysqli_query($mysqli, $update);
        }
    }
    echo"<script> alert('Carro cadastrado com sucesso') </script>";
    $url = "../adicionar.php?name=$nome";
    echo '<script> window.location = "'.$url.'";</script>';
?>