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
            $link = "php/edita.php?name=$nome&id=$id";
            for($i = 1; $i <= 20; $i++){
                $img[$i]= $dados['img'.$i.''];
                $link = "$link&img$i=$img[$i]";
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
        $link = null;
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
                <?php echo "<form method='POST' action='editar.php?name=$nome&id=0'>";?>
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
            <div class='flex-box'><h1 class="titulo">Editar Veículo</h1></div>
            <div class='flex-box'>
                <div class="content-container">
                    <div class="cabecalho">
                        <h3>Dados</h3>
                        <h4><input class="reset" type="reset" value="Limpar Dados" form="form1" required></h4>
                    </div>
                    <?php echo"<form method = 'POST' action = '$link'  enctype='multipart/form-data'>";?>
                        <div class="nome-veiculo">
                            <h4>Nome de exibição </h4> 
                            <?php echo"<input value='$nome_exibicao' name='nome_exibicao' type='text' autocomplete='off'>";?>
                        </div>
                        <div class="preco-veiculo">
                            <h4>Preço</h4>
                            <?php echo"<input value='$preco' name='preco' type='text' autocomplete='off'>";?>
                        </div>
                        <div class="km-veiculo">
                            <h4>Quilometragem</h4>
                            <?php echo"<input value='$quilometragem' name='quilometragem' type='text' autocomplete='off'>";?>
                        </div>
                        <div class="ano-veiculo">
                            <h4>Ano</h4>
                            <?php echo"<input value='$ano_fab' name='ano_fab' placeholder='Fábrica' type='text' autocomplete='off'> <input value='$ano_modelo' name='ano_modelo' placeholder = 'Modelo' type='text' autocomplete='off'>";?>
                        </div>
                        <div class="km-veiculo">
                            <h4>Modelo</h4>
                            <?php echo"<input value='$modelo' name='modelo' type='text' autocomplete='off'>";?>
                        </div>
                        <div class="cor-potencia">
                            <div>
                                <h4>Potência</h4>
                                <?php echo"<input value='$potencia' name= 'potencia' type='text'>";?>
                            </div>
                        </div>
                        <div class="select-container">
                            
                            <select name="cor" id="" required>
                                <?php echo"<option value='$cor' selected hidden> $cor</option>";?>
                                <option value="Preto">Preto</option>
                                <option value="Branco">Branco</option>
                                <option value="Prata">Prata</option>
                                <option value="Vermelho">Vermelho</option>
                                <option value="Cinza">Cinza</option>
                                <option value="Azul">Azul</option>
                                <option value="Amarelo">Amarelo</option>
                                <option value="Verde">Verde</option>
                                <option value="Laranja">Laranja</option>
                                <option value="Outra">Outra</option>
                            </select>
                            <select name="marca" id="" required>
                                <?php echo"<option value='$marca' selected hidden> $marca</option>";?>
                                <option value="CITROEN">CITROEN</option>
                                <option value="FIAT">FIAT</option>
                                <option value="FORD">FORD</option>
                                <option value="GM - CHEVROLET">GM - CHEVROLET</option>
                                <option value="HONDA">HONDA</option>
                                <option value="HYUNDAI">HYUNDAI</option>
                                <option value="JAC">JAC</option>
                                <option value="KIA MOTORS">KIA MOTORS</option>
                                <option value="NISSAN">NISSAN</option>
                                <option value="PEUGEOT">PEUGEOT</option>
                                <option value="RENAULT">RENAULT</option>
                                <option value="TOYOTA">TOYOTA</option>
                                <option value="VW - VOLKSWAGEN">VW - VOLKSWAGEN</option>
                                <option value="AM GEN">AM GEN</option>
                                <option value="MCLAREN">MCLAREN</option>
                                <option value="AGRALE">AGRALE</option>
                                <option value="ALFA ROMEO">ALFA ROMEO</option>
                                <option value="ASIA MOTORS">ASIA MOTORS</option>
                                <option value="AUDI">AUDI</option>
                                <option value="BMW">BMW</option>
                                <option value="BRM">BRM</option>
                                <option value="BUGGY">BUGGY</option>
                                <option value="BUGRE">BUGRE</option>
                                <option value="CBT JIPE">CBT JIPE</option>
                                <option value="CHANGAN">CHANGAN</option>
                                <option value="CHERY">CHERY</option>
                                <option value="CADILLAC">CADILLAC</option>
                                <option value="CHRYSLER">CHRYSLER</option>
                                <option value="CROSS LANDER">CROSS LANDER</option>
                                <option value="DAEWOO">DAEWOO</option>
                                <option value="DAIHATSU">DAIHATSU</option>
                                <option value="DODGE">DODGE</option>
                                <option value="EFFA">EFFA</option>
                                <option value="ENGESA">ENGESA</option>
                                <option value="ENVEMO">ENVEMO</option>
                                <option value="FERRARI">FERRARI</option>
                                <option value="FIBRAVAN">FIBRAVAN</option>
                                <option value="FYBER">FYBER</option>
                                <option value="GREAT WALL">GREAT WALL</option>
                                <option value="GURGEL">GURGEL</option>
                                <option value="HAFEI">HAFEI</option>
                                <option value="ISUZU">ISUZU</option>
                                <option value="JINBEI">JINBEI</option>
                                <option value="JPX">JPX</option>
                                <option value="JAGUAR">JAGUAR</option>
                                <option value="JEEP">JEEP</option>
                                <option value="LAMBORGHINI">LAMBORGHINI</option>
                                <option value="LIFAN">LIFAN</option>
                                <option value="LOBINI">LOBINI</option>
                                <option value="LADA">LADA</option>
                                <option value="LAND ROVER">LAND ROVER</option>
                                <option value="LEXUS">LEXUS</option>
                                <option value="LOTUS">LOTUS</option>
                                <option value="MG">MG</option>
                                <option value="MINI">MINI</option>
                                <option value="MAHINDRA">MAHINDRA</option>
                                <option value="MASERATI">MASERATI</option>
                                <option value="MATRA">MATRA</option>
                                <option value="MAZDA">MAZDA</option>
                                <option value="MERCEDES-BENZ">MERCEDES-BENZ</option>
                                <option value="MERCURY">MERCURY</option>
                                <option value="MITSUBISHI">MITSUBISHI</option>
                                <option value="MIURA">MIURA</option>
                                <option value="PLYMOUNTH">PLYMOUNTH</option>
                                <option value="PONTIAC">PONTIAC</option>
                                <option value="PORSCHE">PORSCHE</option>
                                <option value="ROVER">ROVER</option>
                                <option value="SSANGYONG">SSANGYONG</option>
                                <option value="SAAB">SAAB</option>
                                <option value="SATURN">SATURN</option>
                                <option value="SEAT">SEAT</option>
                                <option value="SUBARU">SUBARU</option>
                                <option value="SUZUKI">SUZUKI</option>
                                <option value="TAC">TAC</option>
                                <option value="TROLLER">TROLLER</option>
                                <option value="VOLVO">VOLVO</option>
                                <option value="WAKE">WAKE</option>
                                <option value="WALK">WALK</option>
                                <option value="SMART">SMART</option>
                                <option value="SHINERAY">SHINERAY</option>
                                <option value="ASTON MARTIN">ASTON MARTIN</option>
                                <option value="FOTON">FOTON</option>
                                <option value="RELY">RELY</option>
                                <option value="ROLLS-ROYCE">ROLLS-ROYCE</option>
                                <option value="DKW VEMAG">DKW VEMAG</option>
                                <option value="LANDWIND">LANDWIND</option>
                                <option value="GEELY">GEELY</option>
                                <option value="CHANA">CHANA</option>
                                <option value="PUMA">PUMA</option>
                                <option value="RAM">RAM</option>
                                <option value="INFINITI">INFINITI</option>
                                <option value="TESLA">TESLA</option>
                                <option value="BABY">BABY</option>
                                <option value="IVECO">IVECO</option>
                                <option value="ACURA">ACURA</option>
                                <option value="HITECH ELETRIC">HITECH ELETRIC</option>
                                <option value="AMERICAR">AMERICAR</option>
                                <option value="MP LAFER">MP LAFER</option>
                                <option value="BENTLEY">BENTLEY</option>
                            </select>
                            <select name="direcao" id="">
                                <?php echo"<option value='$direcao' selected hidden> $direcao</option>";?>
                                <option value="Mecânica">Mecânica</option>
                                <option value="Hidráulica">Hidráulica</option>
                                <option value="Elétrica">Elétrica</option>
                            </select>
                            <select name="cambio" id="">
                                <?php echo"<option value='$cambio' selected hidden> $cambio</option>";?>
                                <option value="Manual">Manual</option>
                                <option value="Automatico">Automatico</option>
                                <option value="Automatizado">Automatizado</option>
                            </select>
                            <select name="combustivel" id="">
                                <?php echo"<option value='$combustivel' selected hidden> $combustivel</option>";?>
                                <option value="Gasolina">Gasolina</option>
                                <option value="Alcool">Alcool</option>
                                <option value="Flex">Flex</option>
                                <option value="Diesel">Diesel</option>
                                <option value="Gas/Alcool/GNV">Gas/Alcool/GNV</option>
                            </select>
                        </div>
                        <div class="textarea-container">
                            <h4>Descrição</h4>
                            <?php echo"<textarea name='descricao' id='' autocomplete='off'>$descricao</textarea>";?>
                        </div>
                        
                        <div class = 'opcionais'>
                            <div>    
                                <input type="checkbox" <?php echo"$air_bag";?> value = 'checked'  name = 'air-bag' id='1'>
                                <label for="">Air bag</label>    

                            </div>
                            <div>
                                <input type="checkbox" <?php echo"$ar_condicionado";?> value = 'checked' name = 'ar-condicionado' id='2'>
                                <label for="">Ar condicionado</label>
                            </div>
                            <div>
                                <input type="checkbox" <?php echo"$trava_eletrica";?> value = 'checked' name = 'trava-eletrica' id='3'>
                                <label for="">Trava elétrica</label>
                            </div>
                            <div>
                                <input type="checkbox" <?php echo"$vidro_eletrico";?> value = 'checked' name = 'vidro-eletrico' id='4'>
                                <label for="">Vidro elétrico</label>
                            </div>
                            <div>
                                <input type="checkbox" <?php echo"$som";?> value = 'checked' name = 'som' id='5'>
                                <label for="">Som</label>
                            </div>
                            <div>
                                <input type="checkbox" <?php echo"$camera_re";?> value = 'checked' name = 'camera-re' id='6'>
                                <label for="">Câmera de ré</label>
                            </div>
                            <div>
                                <input type="checkbox" <?php echo"$blindado";?> value = 'checked' name = 'blindado' id='7'>
                                <label for="">Blindado</label>
                            </div>
                            <div>
                                <input type="checkbox" <?php echo"$direcao_hidraulica";?> value = 'checked' name = 'direcao-hidraulica' id='8'>
                                <label for="">Direção hidráulica</label>
                            </div>
                            <div>
                                <input type="checkbox" <?php echo"$direcao_eletrica";?> value = 'checked' name = 'direcao-eletrica' id='9'>
                                <label for="">Direção elétrica</label>
                            </div>
                            <div>
                                <input type="checkbox" <?php echo"$retrovisor_eletrico";?> value = 'checked'  name = 'retrovisor-eletrico' id='10'>
                                <label for="">Retrovisor elétrico</label>
                            </div>
                            <div>
                                <input type="checkbox" <?php echo"$banco_couro";?> value = 'checked'  name = 'banco-de-couro' id='10'>
                                <label for="">Bancos em couro</label>
                            </div>
                        </div>
                        <div class="file-container">
                            <?php  
                                for($i = 1; $i <= 20; $i++){
                                    echo"
                                    <div class='input-file-container'>
                                        <label class='nome-input' for='file$i'> Imagem $i</label>
                                        <input class='file-input' id='file$i' name='img$i' value='' type='file'>
                                        <label class='img-container' for='file$i' > <img src='/projects/plazzaveiculosCRUD/img/folder.png' alt=''> </label>
                                    </div>
                                    ";
                                }
                            ?>
                        </div>
                        <input type="submit" value="Editar" class="submit">
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