<?php
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
</head>
<body>
    <section>
        <div class="mascara">
            <div class="container">
                <img class="logo" src="/projects/closerlanguagecenter/img/Closer-logo-1.jpg" alt="">
                <form method="POST">
                    <input type="email" required name="email" placeholder="E-mail"> <br>
                    <?php
                        include("php/password.php");
                    ?>
                    <input class="enviar" name="submit" type="submit" value="Send Password"> <br>
                    <a href="/projects/closerlanguagecenter/index.php" class="back">Go Back</a>
                </form>      
            </div>
        </div>
    </section>
</body>
</html>