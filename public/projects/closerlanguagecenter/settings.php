<?php
include("conexao/conexao.php");
session_start();
$name = $_GET['name'];
$email = $_GET['email'];
$id = $_GET['id'];
if(!isset($_SESSION["adm"]) && !isset($_SESSION["student"])){
    session_destroy();
    header("location: index.php");
}
if(isset($_GET['logout'])){
    session_destroy();
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Closer Language Center</title>
    <link rel="stylesheet" href="css/settings.css">
</head>
<body>
    <section>
        <nav>
            <div class="container3">
                <div>
                    <?php echo"<a href='course.php?email=$email&name=$name&id=$id'><img class='arrow3 arrow-back' src='img/arrow3.png' alt=''> </a>";?>
                </div>
                <?php echo"<a class='back' href='course.php?email=$email&name=$name&id=$id'> Get back to course </a>";?>
            </div>
            <div class="container3">
                <img class="perfil" src="img/perfil.png" alt="">
                <?php echo"<p>$name</p>";?>
                <div>
                    <img onclick="dropdown()" class="arrow3" src="img/arrow3.png" alt=""> 
                    <div class="dropdown-content">
                        <ul class="dropdown-list">
                        <li onclick="movetosettings()"><?php echo"<a href='settings.php?email=$email&name=$name&id=$id'><img src='img/settings.png' alt=''> Settings</a>"; ?></li>
                            <li onclick="movetohome()"> <a href="?logout"><img src="img/log-out.png" alt=""> Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="content">
            <div>
                <h1>Perfil Settings</h1>
                <h4>Here you can see your data.</h4>
            </div>
            <div class="form-container">
                    <?php echo"<div> $name </div>";?> <br>
                    <?php echo"<div class='email'> $email </div>";?>
            </div>
            
        </div>
        <hr>
        <div class="content">
            <div>
                <h1>Change Password</h1>
                <h4>Keep it blank to maintain it <br> the same.</h4>
            </div>
            <div class="form-container">
                <form id="form1">
                    <input type="text" class="current-password" placeholder="Current Password">
                    <a class = "fgt" href="forgot.php">Forgot password?</a>
                    <input type="text" placeholder="New Password">
                    <input class="verify" type="text" placeholder="Verify Password">
                </form>
            </div>
        </div>
        <hr>
        <input type="submit" class="save" value="Save" form="form1">
    </section>
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
</body>
</html>