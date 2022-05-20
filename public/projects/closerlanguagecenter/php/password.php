<?php
$submit = filter_input(INPUT_POST, "submit", FILTER_SANITIZE_STRING);
if($submit){
    if(!empty($_POST['email'])){
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
        $select = "SELECT * FROM login_adm WHERE email = '{$_POST['email']}'";
        $result = mysqli_query($mysqli, $select);
        $row = mysqli_num_rows($result);
        if($row == 1){
            $data = mysqli_fetch_array($result);
            $email = $data['email'];
            $password = $data['pass'];

            $subject = "Password";
            mail($email, $subject, $password);
            
        }else{
            $select = "SELECT * FROM login_student WHERE email = '{$_POST['email']}'";
            $result = mysqli_query($mysqli, $select);
            $row = mysqli_num_rows($result);
            if($row == 1){
                $data = mysqli_fetch_array($result);
                $email = $data['email'];
                $password = $data['pass'];
                $subject = "Password";
                mail($email, $subject, $password);

            }else{
                echo"<p>Invalid E-mail</p>";
            }
        }
    }
}
?>