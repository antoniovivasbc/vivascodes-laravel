<?php
    include("conexao/conexao.php");
    session_start();
    $nome = $_GET['name'];
    if(($_SESSION["user"]) == false){
        header("location: index.php");
        session_destroy();
    }
    if(isset($_GET['logout'])){
        session_destroy();
        header("location: index.php");
    }
    $img = array();
    $validador = false;
    $submit = filter_input(INPUT_POST, 'submit', FILTER_SANITIZE_STRING);
    if($submit){
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
        $envia_id = "SELECT * FROM carros WHERE id = '$id'";
        $result = mysqli_query($mysqli, $envia_id);
        $row = mysqli_num_rows($result);
        if($row == 1){
            $dados = mysqli_fetch_array($result);
            $nome_exibicao = $dados['nome_exibicao'];
            $preco = $dados['preco'];
            $quilometragem = $dados['quilometragem'];
            $ano_fab = $dados['ano_fab'];
            $ano_modelo = $dados['ano_modelo'];
            $marca = $dados['marca'];
            $modelo = $dados['modelo'];
            $cor = $dados['cor'];
            $potencia = $dados['potencia'];
            $cambio = $dados['cambio'];
            $combustivel = $dados['combustivel'];
            $direcao = $dados['direcao'];
            $descricao = $dados['descricao'];
            $air_bag = $dados['air_bag'];
            $ar_condicionado = $dados['ar_condicionado'];
            $trava_eletrica = $dados['trava_eletrica'];
            $vidro_eletrico = $dados['vidro_eletrico'];
            $som = $dados['som'];
            $camera_re = $dados['camera_re'];
            $blindado = $dados['blindado'];
            $direcao_hidraulica = $dados['direcao_hidraulica'];
            $direcao_eletrica = $dados['direcao_eletrica'];
            $retrovisor_eletrico = $dados['retrovisor_eletrico'];
            $banco_couro = $dados['banco_couro'];
            for($i = 1; $i <= 20; $i++){
                $img[$i]= $dados['img'.$i.''];
            }
            $validador = true;
        }else{
            echo"<script> alert('Identificador inválido') </script>";
        }
    }else{
        $id = $_GET['id'];
        $nome_exibicao = null;
        $preco = null;
        $quilometragem = null;
        $ano_fab = null;
        $ano_modelo = null;
        $marca = null;
        $modelo = null;
        $cor = null;
        $potencia = null;
        $cambio  = null;
        $combustivel = null;
        $direcao = null;
        $descricao = null;
        $air_bag = null;
        $ar_condicionado = null;
        $trava_eletrica = null;
        $vidro_eletrico = null;
        $som = null;
        $camera_re = null;
        $blindado = null;
        $direcao_hidraulica = null;
        $direcao_eletrica = null;
        $retrovisor_eletrico = null;
        $banco_couro = null;
        for($i = 1; $i <= 20; $i++){
            $img[$i] = null;
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plazza Veículos</title>
    <link rel="stylesheet" href="/projects/plazzaveiculosCRUD/css/homedb.css">
    <link rel="stylesheet" href="/projects/plazzaveiculosCRUD/css/geral.css">
</head>
<body>
    <section>
        <div id="modal" class="modal">
            <div class="modal-container">
                <div>Identificador</div>
                <?php echo "<form method='POST' action='remover.php?name=$nome&id=0'>";?>
                    <input type="text" name="id" placeholder="Ex: 34" autofocus autocomplete="off" required> <br>
                    <input type="submit" name="submit" class="enviar">
                </form>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="logo-container">
                <img src="/projects/plazzaveiculosCRUD/img/logo2.png" alt="">
                <h4>Dashboard</h4>
            </div>
            <div class="user-container">
                <img src="/projects/plazzaveiculosCRUD/img/user.png" alt="">
                <?php echo"<h4>$nome</h4>"; ?>
            </div>
            <div class="diretorios">
                <?php echo "<a href='/projects/plazzaveiculosCRUD/adicionar.php?name=$nome' class='add'><img src='/projects/plazzaveiculosCRUD/img/add.png' alt=''> Adicionar Veículo</a>";?>
                <?php echo "<a href='/projects/plazzaveiculosCRUD/remover.php?name=$nome&id=0' class='add'><img src='/projects/plazzaveiculosCRUD/img/remove.png' alt=''> Remover Veículo</a>";?>
                <?php echo "<a href='/projects/plazzaveiculosCRUD/editar.php?name=$nome&id=0' class='add'><img src='/projects/plazzaveiculosCRUD/img/edit.png' alt=''> Editar Veículo</a>";?>
            </div>
            <div class="sair">
                <a href="/projects/plazzaveiculosCRUD/?logout"><img src="/projects/plazzaveiculosCRUD/img/logout.png" alt=""> Sair</a>
            </div>
        </div>
        <div id="toggle" class="toggle">
            <img onclick="sidebar()" src="/projects/plazzaveiculosCRUD/img/menu.png"  alt="">
        </div>
        <div class="content">
            <div class='flex-box'><h1 class="titulo">Remover Veículo</h1></div>
            <div class='flex-box'>
                <div class="content-container">
                    <div class="cabecalho">
                        <?php echo"<form style='display:none;' action='remover.php?name=$nome&id=0' method='POST' id='form-refresh'></form>";?>
                        <h3>Dados</h3>
                        <h4><input class="reset" type="submit" form="form-refresh" value="Limpar Dados" required onclick="refresh()"></h4>
                    </div>
                    <?php echo"<form action = 'php/remove.php?name=$nome&id=$id' method = 'POST'>";?>
                        <div class="nome-veiculo">
                            <h4> Nome de exibição </h4> 
                            <?php echo"<input disabled value='$nome_exibicao' type='text'>";?>
                        </div>
                        <div class="preco-veiculo">
                            <h4>Preço</h4>
                            <?php echo"<input disabled value='$preco' type='text'>";?>
                        </div>
                        <div class="km-veiculo">
                            <h4>Quilometragem</h4>
                            <?php echo"<input disabled value='$quilometragem' type='text'>";?>
                        </div>
                        <div class="ano-veiculo">
                            <h4>Ano</h4>
                            <?php echo"<input disabled value='$ano_fab'  placeholder='Fáb' type='text'> <input disabled value='$ano_modelo' placeholder = 'Mod' type='text'>";?>
                        </div>
                        <div class="km-veiculo">
                            <h4>Modelo</h4>
                            <?php echo"<input disabled value='$modelo' type='text'>";?>
                        </div>
                        <div class="cor-potencia">
                            <div>
                                <h4>Potência</h4>
                                <?php echo"<input disabled value='$potencia' type='text'>";?>
                            </div>
                        </div>
                        <div class="select-container">
                            <select disabled name="" id="">
                                <?php echo"<option value='$cor' selected hidden disabled> $cor</option>";?>
                            </select>
                            <select disabled name="" id="">
                                <?php echo"<option value='$marca' selected hidden disabled> $marca</option>";?>
                            </select>
                            <select disabled name="" id="">
                                <?php echo"<option value='$direcao' selected hidden disabled> $direcao</option>";?>
                            </select>
                            <select disabled name="" id="">
                                <?php echo"<option value='$cambio' selected hidden disabled> $cambio</option>";?>
                            </select>
                            <select disabled name="" id="">
                                <?php echo"<option value='$combustivel' selected hidden disabled> $combustivel</option>";?>
                            </select>
                        </div>
                        <div class="textarea-container">
                            <h4>Descrição</h4>
                            <?php echo"<textarea name='' disabled id=''>$descricao</textarea>";?>
                        </div>
                        
                        
                        <div class = 'opcionais'>
                            <div>    
                                <input type="checkbox" disabled <?php echo"$air_bag";?> name = 'air-bag' id='1'>
                                <label for="">Air bag</label>    
                            </div>
                            <div>
                                <input type="checkbox" disabled <?php echo"$ar_condicionado";?> name = 'ar-condicionado' id='2'>
                                <label for="">Ar condicionado</label>
                            </div>
                            <div>
                                <input type="checkbox" disabled <?php echo"$trava_eletrica";?> name = 'trava-eletrica' id='3'>
                                <label for="">Trava elétrica</label>
                            </div>
                            <div>
                                <input type="checkbox" disabled <?php echo"$vidro_eletrico";?> name = 'vidro-eletrico' id='4'>
                                <label for="">Vidro elétrico</label>
                            </div>
                            <div>
                                <input type="checkbox" disabled <?php echo"$som";?> name = 'som' id='5'>
                                <label for="">Som</label>
                            </div>
                            <div>
                                <input type="checkbox" disabled <?php echo"$camera_re";?> name = 'camera-re' id='6'>
                                <label for="">Câmera de ré</label>
                            </div>
                            <div>
                                <input type="checkbox" disabled <?php echo"$blindado";?> name = 'blindado' id='7'>
                                <label for="">Blindado</label>
                            </div>
                            <div>
                                <input type="checkbox" disabled <?php echo"$direcao_hidraulica";?> name = 'direcao-hidraulica' id='8'>
                                <label for="">Direção hidráulica</label>
                            </div>
                            <div>
                                <input type="checkbox" disabled <?php echo"$direcao_eletrica";?> name = 'direcao-eletrica' id='9'>
                                <label for="">Direção elétrica</label>
                            </div>
                            <div>
                                <input type="checkbox" disabled <?php echo"$retrovisor_eletrico";?>  name = 'retrovisor-eletrico' id='10'>
                                <label for="">Retrovisor elétrico</label>
                            </div>
                            <div>
                                <input type="checkbox" disabled <?php echo"$banco_couro";?>  name = 'banco-de-couro' id='10'>
                                <label for="">Bancos em couro</label>
                            </div>
                        </div>
                        <div class="file-container">
                            <?php  
                                for($i = 1; $i <= 20; $i++){
                                    echo"
                                    <div class='input-file-container'>
                                        <label class='nome-input' for='file$i'> Imagem $i</label>
                                        <input class='file-input' id='file$i' value='$img[$i]' disabled type='file'>
                                        <label class='img-container' for='file$i' > <img src='/projects/plazzaveiculosCRUD/img/folder.png' alt=''> </label>
                                    </div>
                                    ";
                                }
                            ?>
                        </div>
                        <input type="submit" value="Remover" class="submit">
                        
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="/projects/plazzaveiculosCRUD/js/main.js"></script>
    <?php
        if($validador == false){

        }else{
            echo"
                <script> 
                    var modal = document.getElementById('modal');
                    modal.style.display = 'none';
                </script>";
        }
    ?>
</body>
</html>