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
include("php/classes.php");
include("php/classesfinished.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Closer Language Center</title>
    <link rel="stylesheet" href="/projects/closerlanguagecenter/css/course.css">
</head>
<body>
    <section>
        <div class="sidebar">
            <img class="logo2" src="/projects/closerlanguagecenter/img/logo.jpg" alt="">
            <div class="container4">
                <?php $percent = $classcount*100/25; echo"<div class='progress'><p>$percent%</p></div>";?>
                <?php echo"<p class='progress2'>$classcount of 25 classes <br> completed</p>";?>
            </div>
            <br><br id="br">
            <hr>
            
            <div class="content-container-father">
                <div class="content-container"  onclick="classes_dropdown()">
                    <img src="/projects/closerlanguagecenter/img/content.png" alt="">
                    <p>The vowel sounds</p>
                </div>
                <div class="classes-container" id="classes">
                    <ul>
                        <?php
                            $getclasses = "SELECT * FROM classes";
                            $result = mysqli_query($mysqli, $getclasses);
                            $i = 1;
                            while($data = mysqli_fetch_array($result)){
                                if($i <= 9){
                                    $classname = $data['title'];
                                    if($getvalidator[$i-1] == 1){
                                        echo "<li> <div class='ball1 ball'></div><a href='/projects/closerlanguagecenter/course.php?email=$email&name=$name&id=$i'> $classname </a></li>";
                                    }else{
                                        echo "<li> <div class='ball'></div><a href='/projects/closerlanguagecenter/course.php?email=$email&name=$name&id=$i'> $classname </a></li>";
                                    }
                                    $i++;
                                }if($i == 10){
                                    break;
                                }
                            }
                            ?>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="content-container-father">
                <div class="content-container" onclick="classes_dropdown2()">
                    <img src="/projects/closerlanguagecenter/img/content.png" alt="">
                    <p>Complex vowel sounds</p>
                </div>
                <div class="classes-container" id="classes2">
                    <ul>
                        <?php
                            while($data = mysqli_fetch_array($result)){
                                if($i <= 17){
                                    $classname = $data['title'];
                                    if($getvalidator[$i-1] == 1){
                                        echo "<li> <div class='ball1 ball'></div><a href='/projects/closerlanguagecenter/course.php?email=$email&name=$name&id=$i'> $classname </a></li>";
                                    }else{
                                        echo "<li> <div class='ball'></div><a href='/projects/closerlanguagecenter/course.php?email=$email&name=$name&id=$i'> $classname </a></li>";
                                    }
                                    $i++;
                                }if($i == 18){
                                    break;
                                }
                            }
                        ?>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="content-container-father">
                <div class="content-container" onclick="classes_dropdown3()">
                    <img src="/projects/closerlanguagecenter/img/content.png" alt="">
                    <p>Words in crontrast</p>
                </div>
                <div class="classes-container" id="classes3">
                    <ul>
                        <?php
                            while($data = mysqli_fetch_array($result)){
                                if($i <= 20){
                                    $classname = $data['title'];
                                    if($getvalidator[$i-1] == 1){
                                        echo "<li> <div class='ball1 ball'></div><a href='/projects/closerlanguagecenter/course.php?email=$email&name=$name&id=$i'> $classname </a></li>";
                                    }else{
                                        echo "<li> <div class='ball'></div><a href='/projects/closerlanguagecenter/course.php?email=$email&name=$name&id=$i'> $classname </a></li>";
                                    }
                                    $i++;
                                }if($i == 21){
                                    break;
                                }
                            }
                        ?>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="content-container-father">
                <div class="content-container" onclick="classes_dropdown4()">
                    <img src="/projects/closerlanguagecenter/img/content.png" alt="">
                    <p>The sound /vowel + hr/</p>
                </div>
                <div class="classes-container" id="classes4">
                    <ul>
                        <?php
                            while($data = mysqli_fetch_array($result)){
                                if($i <= 25){
                                    $classname = $data['title'];
                                    if($getvalidator[$i-1] == 1){
                                        echo "<li> <div class='ball1 ball'></div><a href='/projects/closerlanguagecenter/course.php?email=$email&name=$name&id=$i'> $classname </a></li>";
                                    }else{
                                        echo "<li> <div class='ball'></div><a href='/projects/closerlanguagecenter/course.php?email=$email&name=$name&id=$i'> $classname </a></li>";
                                    }
                                    $i++;
                                }if($i == 26){
                                    break;
                                }
                            }
                        ?>
                    </ul>
                </div>
            </div>
            <hr>
        </div>   
        <div class="content">
            <nav>
                <div class="toggle-container">
                    <img onclick="hide_appear_sidebar()" class="toggle-btn" src="/projects/closerlanguagecenter/img/toggle.png" alt="">
                </div>
                <div class="container3">
                    <img class="perfil" src="/projects/closerlanguagecenter/img/perfil.png" alt="">
                    <?php
                        echo"<p>$name</p>";
                    ?>
                    <div>
                        <img onclick="dropdown()" class="arrow3" src="/projects/closerlanguagecenter/img/arrow3.png" alt=""> 
                        <div class="dropdown-content">
                            <ul class="dropdown-list">
                                <li onclick="movetosettings()"><?php echo"<a href='/projects/closerlanguagecenter/settings.php?email=$email&name=$name&id=$id'><img src='/projects/closerlanguagecenter/img/settings.png' alt=''> Settings</a>"; ?></li>
                                <li onclick="movetohome()"> <a href="/projects/closerlanguagecenter/?logout"><img src="/projects/closerlanguagecenter/img/log-out.png" alt=""> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="masc0"></div>
                <div class="container">
                    <?php echo " <a href='/projects/closerlanguagecenter/course.php?email=$email&name=$name&id=$id2'> <span> < </span>  Previous Class </a>"; ?>
                    <?php echo " <a href='/projects/closerlanguagecenter/course.php?email=$email&name=$name&id=$id3'> Next Class  <span> ></span> </a>"; ?>
                </div>
                <?php echo "<h1 class= 'title'>$title</h1>"; ?>
                <div class="container2">
                <?php echo "<iframe src='/projects/closerlanguagecenter/https://player.vimeo.com/video/$link?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479' frameborder='0' allow='autoplay; fullscreen; picture-in-picture' title='closer Mini Promo (3).mp4'></iframe><script src='/projects/closerlanguagecenter/https://player.vimeo.com/api/player.js'></script>";?>
                    <br> <br>
                    <form method="POST">
                        <input type="submit" name="finishclass" value="Class Finished" class="finish-class"></input>
                    </form>
                </div>
            <form id="form">
                <textarea id="comment" required name="comment" class="textarea" placeholder="Text Here"></textarea> <br>
                <input type="submit" value="Submit" class="send" name="submit" form="form">
            </form>

            <div id='comments-container'>
            </div>
        </div>
    </section>
    <script src="/projects/closerlanguagecenter/js/jquery.js"></script>
    <script src="/projects/closerlanguagecenter/js/main.js"></script>
    <script src="/projects/closerlanguagecenter/js/comment.js"></script>
    <script> 
        var _name = '<?php echo $name ;?>';
    </script>
</body>
</html>