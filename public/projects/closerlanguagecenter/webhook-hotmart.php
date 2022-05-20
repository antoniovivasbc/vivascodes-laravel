<?php
include("conexao/conexao.php");

$content = $_POST;
echo"oi";
if($content['email']){
    $email = $content['email'];
    $send = "INSERT INTO webhook (email) VALUES ('$email')";
    $result = mysqli_query($mysqli, $send);
}else{
    $send = "INSERT INTO webhook (email) VALUES ('oi')";
    $result = mysqli_query($mysqli, $send);
}
    $send = "INSERT INTO webhook (email) VALUES ('oi')";
    $result = mysqli_query($mysqli, $send);
?>