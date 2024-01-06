<?php
require 'config.php';

//deleting proccess
if (isset($_POST['submit'])) {
    $sql = "SELECT * FROM deleting";
    $resul = mysqli_query($conection, $sql);

    while ($a = mysqli_fetch_assoc($resul)) {
        $id = $a['id'];
        $sql = "DELETE FROM comment WHERE id='$id'";
        if (mysqli_query($conection, $sql)) {
            echo "Deleted comment with id: " . $id . "<br>";
        } else {
            echo "Error deleting comment with id: " . $id . "<br>";
        }
    }
    header('Location:table.php');
    exit;
}


//edited by kavinda kiridana
//more information go to this link below
//https://www.linkedin.com/in/kavinda-kiridana-8a330521a/
