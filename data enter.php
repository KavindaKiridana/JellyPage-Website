<?php
require 'config.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($conection, $_POST['Name']);
    $email = mysqli_real_escape_string($conection, $_POST['Email']);
    $subject = mysqli_real_escape_string($conection, $_POST['Subject']);
    $comment = mysqli_real_escape_string($conection, $_POST['Comment']);

    if (strlen(trim($name)) > 0 or strlen(trim($email)) > 0 or  strlen(trim($subject)) > 0 or  strlen(trim($name)) > 0) {
        $sql = "insert into comment( name,email,subject,comments ) values ( '$name','$email','$subject','$comment' )";
        mysqli_query($conection, $sql);
    }
    header('Location: index.php');
    exit;
}
