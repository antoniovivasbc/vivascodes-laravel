<?php
/*
$captcha = $_POST['g-recaptcha-response'];
    if($captcha != ''){
        $secretkey = '6LdguZ8eAAAAAF0PnfHkfT6ajpdUncmR7bZQuJ5G';
        $ip = $_SERVER['REMOTE_ADDR'];
        $var = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$captcha&remoteip=$ip");
        $resposta = json_decode($var, true);

        if($resposta['success']){ */
            include('login.php');
            /*
        }
    } */
?>