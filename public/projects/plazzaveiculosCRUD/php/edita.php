<?php
    include("../conexao/conexao.php");
    $nome = $_GET['name'];
    $id = $_GET['id'];
    $img = array();
    $imagem = array();
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
    $banco_couro = filter_input(INPUT_POST, 'banco-de-couro', FILTER_SANITIZE_STRING);
    $_UP['pasta'] = "../veiculos/$id/";
    for($i = 1; $i <= 20; $i++){
        if(!empty($_GET['img'.$i.''])){
            $img[$i] = $_GET['img'.$i.''];
        }
        $imagem[$i] = $_FILES['img'.$i.'']['name'];
        $file_ext[$i] = substr($imagem[$i], strripos($imagem[$i], "."));
        if(!empty($imagem[$i]) && !empty($_GET['img'.$i.''])){
            unlink("../veiculos/$id/$img[$i]");
            if(move_uploaded_file($_FILES['img'.$i.'']["tmp_name"], $_UP['pasta']. "$i$file_ext[$i]")){
                $img = 'img'.$i.'';
                $update = "UPDATE carros SET $img = '$i$file_ext[$i]' WHERE id = '$id'";
                $result = mysqli_query($mysqli, $update);  
            }
              
        }elseif(!empty($imagem[$i]) && empty($_GET['img'.$i.''])){
            $img = 'img'.$i.'';
            $update = "UPDATE carros SET $img = '$i$file_ext[$i]' WHERE id = '$id'";
            $result = mysqli_query($mysqli, $update);
            move_uploaded_file($_FILES['img'.$i.'']["tmp_name"], $_UP['pasta']. "$i$file_ext[$i]");
        }
    }
    $uptade = "UPDATE carros SET nome_exibicao = '$nome_exibicao', preco = '$preco', quilometragem = '$quilometragem', ano_fab = '$ano_fab', ano_modelo = '$ano_modelo',
            marca = '$marca', modelo = '$modelo', cor = '$cor', potencia = '$potencia', cambio = '$cambio', combustivel = '$combustivel', direcao = '$direcao', descricao = '$descricao',
            air_bag = '$air_bag', ar_condicionado = '$ar_condicionado', trava_eletrica = '$trava_eletrica', vidro_eletrico = '$vidro_eletrico', som = '$som', camera_re = '$camera_re', blindado = '$blindado', direcao_hidraulica = '$direcao_hidraulica', direcao_eletrica = '$direcao_eletrica', retrovisor_eletrico = '$retrovisor_eletrico', banco_couro = '$banco_couro' WHERE id = '$id'";
    $result = mysqli_query($mysqli, $uptade);
    echo"<script> alert('Carro editado com sucesso') </script>";
    $url = "../editar.php?name=$nome&id=0";
    echo '<script> window.location = "'.$url.'";</script>';
?>