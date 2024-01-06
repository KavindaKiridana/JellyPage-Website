<?php
require 'config.php';

#Do not delete this 6 commects(if you forgot the pin which you entered,you can reset the pin using this commnets)
#For that you need to delete the # in the comments below and run this page and then change the PIN number by using the number 123 for the old pin.
$pin = "123";
$encryptpass = password_hash($pin, PASSWORD_DEFAULT);
$sql = "insert into pin (pin_number) values ('$encryptpass')";
$result2 = mysqli_query($conection, $sql);

$error = [];
// Check if the form has been submitted
if (isset($_POST['submit'])) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $password = mysqli_real_escape_string($conection, $_POST['password']);

        //login process
        $select = "select pin_number from pin";
        $result = mysqli_query($conection, $select);
        $verify = false;
        while ($row = mysqli_fetch_assoc($result) and !$verify) {
            $verify = password_verify($password, $row['pin_number']);
        }
        if ($verify) {
            header('Location:table.php');
            exit;
        } else {
            $error[] = "incorrect pin number";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>

    <link rel="stylesheet" href="x .css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

</head>

<body>
    <div class="form-container">
        <form action="admin login.php" method="post">
            <h3>Please enter your pin number</h3>
            <input type="password" name="password" required placeholder="enter your pin">
            <input name="submit" type="submit" value="Login now" class="form-btn">
            <?php
            if (!(empty($error))) {
                foreach ($error as $x) {
                    echo $x;
                }
            }
            #i want to display an error massege "incorrect pin number,please enter again"
            ?>
            <p>Want to go back<a href="index.php">Click here</a></p>
        </form>
    </div>
</body>

</html>