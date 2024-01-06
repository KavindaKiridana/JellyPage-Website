<?php
require 'config.php';
$message = [];
// Check if the form has been submitted
if (isset($_POST['submit'])) {
    //pin changing process
    $old_pin = mysqli_real_escape_string($conection, $_POST['name']);
    $pin = mysqli_real_escape_string($conection, $_POST['password']);
    $cpin = mysqli_real_escape_string($conection, $_POST['cpassword']);

    //verifing the old password
    $select = "select * from pin";
    $result = mysqli_query($conection, $select);
    $verify = false;
    while ($row = mysqli_fetch_assoc($result) and !$verify) {
        $verify = password_verify($old_pin, $row['pin_number']);
    }
    if ($verify) {

        //check the new pin has relevant charactors
        function checkPassword($password)
        {
            // Check if password has at least one numeric symbol, one uppercase letter, and one lowercase letter
            if (preg_match('/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z]).{1,}$/', $password) && strlen($password) >= 8) {
                return true; // Password meets requirements
            } else {
                return false; // Password does not meet requirements
            }
        }
        $result = checkPassword($pin);
        if ($result) {
            #password has a numeric symbol, an uppercase character, and a lowercase letter
            if ($pin == $cpin) {
                #now change the pin number
                $encryptpass = password_hash($pin, PASSWORD_DEFAULT);
                $sql = "update pin set pin_number='$encryptpass'";
                if (mysqli_query($conection, $sql)) {
                    $message[] = "Changed the pin number";
                } else {
                    $message[] = "An error occured, Please try again";
                }
            } else {
                $message[] = "New two passwords have to match";
            }
        } else {
            #"Password is not valid";
            $message[] = "Pin number must include a numeric symbol, an uppercase character, a lowercase letter and at leaset 8 characters";
        }
    } else {
        $message[] = "old pin number is not valid";
    }
} else {
    $message[] = "Pin number must include a numeric symbol, an uppercase character,a lowercase letter and at leaset 8 characters";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register form</title>
    <!--css link-->
    <link rel="stylesheet" href="x .css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body>
    <div class="form-container">
        <form action="change pin.php" method="post">
            <h3>Change the pin</h3>
            <p>
                <?php
                foreach ($message as $x) {
                    echo $x . "<br>";
                }
                ?>
            </p>
            <input type="text" name="name" required placeholder="enter old pin">
            <input type="password" name="password" required placeholder="enter new pin">
            <input type="password" name="cpassword" required placeholder="reenter pin">
            <input type="submit" name="submit" value="Change" class="form-btn">

            <p><a href="table.php">Go back</a></p>
        </form>
    </div>
</body>

</html>

<!-- 
edited by kavinda kiridana
more information go to this link below
https://www.linkedin.com/in/kavinda-kiridana-8a330521a/
 -->