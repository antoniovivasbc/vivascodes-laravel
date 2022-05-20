<?php
session_start();
include("conexao/conexao.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Closer Language Center</title>
    <link rel="stylesheet" href="/projects/closerlanguagecenter/css/index.css">
    <script src="/projects/closerlanguagecenter/js/main.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <section>
        <div class="mascara">
            <div class="container">
                <img class="logo" src="/projects/closerlanguagecenter/img/Closer-logo-1.jpg" alt="">
                <form method="POST">
                    <input type="email" placeholder="E-mail" name="email" required>
                    <input type="password" placeholder="Password" name="password" required> <br>
                    <?php include("php/recaptcha.php"); ?>
                    <div class="captcha-container">
                        <div class="g-recaptcha" data-sitekey="6LdguZ8eAAAAAKmE4u_t6jhOqA12MbbVn4ixfAk7"></div>
                    </div>
                    <input class="enviar" type="submit" value="Get Closer" name="submit"><br>
                    <a href="/projects/closerlanguagecenter/forgot.php" class="passfgt">Forgot password?</a>
                </form>
            </div>
        </div>
    </section>
</body>
</html>