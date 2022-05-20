<?php
    session_start();
    include("conexao/conexao.php");
    include("php/login.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/projects/plazzaveiculosCRUD/css/index.css">
    <title>Plazza Veículos</title>
</head>
<body>
    <section>
        <div class='logo-container'><img class="logo" src="projects/plazzaveiculosCRUD/img/logo2.png" alt=""></div>
        
        <div class='form-container'>
            <form method="POST">
                <h2>Login</h2>
                <h3>Acesso aos admnistradores</h3>
                <input type="text" required autocomplete="off" name="nome" placeholder="Nome">
                <input type="password" required autocomplete="off" name="senha" placeholder="Senha">
                <input class="enviar" type="submit" value="Entrar" name="submit" id="">
                <div class="link-container">
                    <h4 onclick="redirecionasite()">Ir para o site <hr></h4>
                </div>
            </form>
        </div>
    </section>
    <script src="/projects/plazzaveiculosCRUD/js/main.js"></script>
</body>
</html>