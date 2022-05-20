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
            <div class='flex-box'><h1 class="titulo">Adicionar Veículo</h1></div>
            <div class='flex-box'>
                <div class="content-container">
                    <div class="cabecalho">
                        <h3>Dados</h3>
                        <h4><input class="reset" type="reset" value="Limpar Dados" form="form1" required></h4>
                    </div>
                    <?php echo" <form id='form1' method='POST' action='php/enviadados.php?name=$nome' enctype='multipart/form-data'>"; ?>
                        <div class="nome-veiculo">
                            <h4> Nome de exibição </h4> 
                            <input type="text" autocomplete="off" name="nome_exibicao" required>
                        </div>
                            <div class="preco-veiculo">
                                <h4>Preço</h4>
                                <input type="text" autocomplete="off" name="preco" required>
                            </div>
                            <div class="km-veiculo">
                                <h4>Quilometragem</h4>
                                <input type="text" autocomplete="off" name="quilometragem" required>
                            </div>
                            <div class="ano-veiculo">
                                <h4>Ano</h4>
                                <input type="text" autocomplete="off" name="ano_fab" placeholder="Fáb" required> <input type="text" autocomplete="off" name="ano_modelo" placeholder="Mod" required>
                            </div>
                        <div class="km-veiculo">
                            <h4>Modelo</h4>
                            <input type="text" autocomplete="off" name="modelo" required>
                        </div>
                        <div class="cor-potencia">
                            <div>
                                <h4>Potência</h4>
                                <input type="text" autocomplete="off" name="potencia" required>
                            </div>
                        </div>
                        <div class="select-container">
                            <select name="cor" id="" required>
                                <option value="" selected hidden disabled> Cor</option>
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
                                <option value="" selected hidden disabled> Marca</option>
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
                            <select name="direcao" id="" required>
                                <option value="" selected hidden disabled> Direção</option>
                                <option value="Mecânica">Mecânica</option>
                                <option value="Hidráulica">Hidráulica</option>
                                <option value="Elétrica">Elétrica</option>
                            </select>
                            <select name="cambio" id="" required>
                                <option value="" selected hidden disabled> Câmbio</option>
                                <option value="Manual">Manual</option>
                                <option value="Automático">Automático</option>
                                <option value="Automatizado">Automatizado</option>
                            </select>
                            <select name="combustivel" id="" required>
                                <option value="" selected hidden disabled> Combustível</option>
                                <option value="Gasolina">Gasolina</option>
                                <option value="Alcool">Alcool</option>
                                <option value="Flex">Flex</option>
                                <option value="Diesel">Diesel</option>
                                <option value="Gas/Alcool/GNV">Gas/Alcool/GNV</option>
                            </select>
                        </div>
                        <div class="textarea-container">
                            <h4>Descrição</h4>
                            <textarea name="descricao" autocomplete="off" id="" required></textarea>
                        </div>
                        
                        <div class = 'opcionais'>
                            <div>    
                                <input type="checkbox" value = 'checked'  name = 'air-bag' id='1'>
                                <label for="">Air bag</label>
                            </div>
                            <div>
                                <input type="checkbox" value = 'checked' name = 'ar-condicionado' id='2'>
                                <label for="">Ar condicionado</label>
                            </div>
                            <div>
                                <input type="checkbox" value = 'checked' name = 'trava-eletrica' id='3'>
                                <label for="">Trava elétrica</label>
                            </div>
                            <div>
                                <input type="checkbox" value = 'checked' name = 'vidro-eletrico' id='4'>
                                <label for="">Vidro elétrico</label>
                            </div>
                            <div>
                                <input type="checkbox" value = 'checked' name = 'som' id='5'>
                                <label for="">Som</label>
                            </div>
                            <div>
                                <input type="checkbox" value = 'checked' name = 'camera-re' id='6'>
                                <label for="">Câmera de ré</label>
                            </div>
                            <div>
                                <input type="checkbox" value = 'checked' name = 'blindado' id='7'>
                                <label for="">Blindado</label>
                            </div>
                            <div>
                                <input type="checkbox" value = 'checked' name = 'direcao-hidraulica' id='8'>
                                <label for="">Direção hidráulica</label>
                            </div>
                            <div>
                                <input type="checkbox" value = 'checked' name = 'direcao-eletrica' id='9'>
                                <label for="">Direção elétrica</label>
                            </div>
                            <div>
                                <input type="checkbox" value = 'checked'  name = 'retrovisor-eletrico' id='10'>
                                <label for="">Retrovisor elétrico</label>
                            </div>
                            <div>
                                <input type="checkbox" value = 'checked'  name = 'banco-de-couro' id='10'>
                                <label for="">Bancos em couro</label>
                            </div>
                        </div>
                        <div class="file-container">
                            <?php  
                                for($i = 1; $i <= 20; $i++){
                                    echo"
                                    <div class='input-file-container'>
                                        <label class='nome-input' for='file$i'> Imagem $i</label>
                                        <input class='file-input' name='img$i' id='file$i' value='' type='file'>
                                        <label class='img-container' for='file$i' > <img src='/projects/plazzaveiculosCRUD/img/folder.png' alt=''> </label>
                                    </div>
                                    ";
                                }
                            ?>
                        </div>
                        <input type="submit" name="submit" value="Salvar" class="submit">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="/projects/plazzaveiculosCRUD/js/main.js"></script>
</body>
</html>