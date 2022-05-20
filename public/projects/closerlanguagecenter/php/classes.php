<?php
    $id = $_GET['id'];
    $id2 = $id - 1;
    $id3 = $id + 1;
    $class = "SELECT * FROM classes WHERE id = '{$_GET['id']}'";
    $result = mysqli_query($mysqli, $class);
    $data = mysqli_fetch_array($result);
    $link = $data['link'];
    $title = $data['title'];
    if($id < 1){
        header("location: course.php?email=$email&name=$name&id=1");
    }
    if($id > 25){
        header("location: course.php?email=$email&name=$name&id=25");
    }
?>