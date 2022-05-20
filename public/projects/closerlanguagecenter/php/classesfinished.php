<?php
/* counter */
    $classcount = 0;
    $getclassesfinished = "SELECT * FROM classes_finished WHERE email = '{$_GET['email']}'";
    $result2 = mysqli_query($mysqli, $getclassesfinished);
    $data2 = mysqli_fetch_array($result2);
    $email2 = $data2['email'];
    for($i=1; $i<=25; $i++){
        $validator = $data2["$i"];
        $getvalidator [$i -1] = $validator; 
        if($getvalidator[$i-1] == 1){
            $classcount ++;
        }
    }
?>
<?php
/* finish class */
    $finishclass = filter_input(INPUT_POST, 'finishclass', FILTER_SANITIZE_STRING);
    if($finishclass){
        $class = $data2[$id];
        if($class == 1){
            $uptadeclass = "UPDATE `classes_finished` SET `$id` = '0' WHERE `classes_finished`.`email` = '{$_GET['email']}'";
            $result3 = mysqli_query($mysqli, $uptadeclass);
        }else{
            $uptadeclass = "UPDATE `classes_finished` SET `$id` = '1' WHERE `classes_finished`.`email` = '{$_GET['email']}'";
            $result3 = mysqli_query($mysqli, $uptadeclass);
        }
        $url = "course.php?name=$name&email=$email&id=$id";
        echo '<script>window.location = "'.$url.'";</script>';
    }
?>