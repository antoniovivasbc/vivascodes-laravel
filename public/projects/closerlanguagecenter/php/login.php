<?php
    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        $login_adm = "SELECT * FROM login_adm WHERE email = '{$_POST['email']}' and pass = '{$_POST['password']}'";
        $result = mysqli_query($mysqli, $login_adm);
        $row = mysqli_num_rows($result);
        if($row == 1){
            $data = mysqli_fetch_array($result);
            $name = $data['name'];
            $email = $data['email'];
            $number = $data['number'];
            $_SESSION["adm"] = true;
            $url = "course.php?name=$name&email=$email";
            echo '<script>window.location = "'.$url.'";</script>';
        }else{
            $login_student = "SELECT * FROM login_student WHERE email = '{$_POST['email']}' and pass = '{$_POST['password']}'";
            $result = mysqli_query($mysqli, $login_student);
            $row = mysqli_num_rows($result);
            if($row == 1){
                $data = mysqli_fetch_array($result);
                $name = $data['name'];
                $email = $data['email'];
                $number = $data['number'];
                $_SESSION["student"] = true;
                $url = "course.php?name=$name&email=$email";
                echo '<script>window.location = "'.$url.'";</script>';
            }else{
                echo"<p> Invalid e-mail or password </p>";
            }
        }
    }
?>