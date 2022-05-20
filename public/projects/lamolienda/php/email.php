<?php
    include_once('src/PHPMailer.php');
    include_once('src/SMTP.php');
    include_once('src/Exception.php');
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    $mail = new PHPMailer(true);
    try{
        $mail->SMTPDebug = 1;
        $mail->CharSet = 'UTF-8;';
        $mail->isSMTP();
        $mail->Host = 'smtp.titan.email';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "ssl";
        $mail->Username = 'teste@lamoliendapanaderia.com';
        $mail->Password = '@LM123456';
        $mail->Port = 465;
        $mail->setFrom('teste@lamoliendapanaderia.com');
        $mail->addAddress('teste@lamoliendapanaderia.com');
        $mail->isHTML(true);
        $mail->Subject = 'Contacto La Molienda Site';
        $mail->Body = "Olá, meu nome é $nome, email: $email e esta é minha mensagem: $mensagem";
        if($mail->send()){
            echo"<script> window.alert ('Email enviado com sucesso') </script>";
            $url = "../contacto.php";
            echo '<script> window.location = "'.$url.'";</script>';
        }else{
            echo"<script> window.alert ('Erro ao enviar Email, teste novamente') </script>";
            $url = "../contacto.php";
            echo '<script> window.location = "'.$url.'";</script>';
        }
    } catch(Exception $e){
        echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
    }
?>