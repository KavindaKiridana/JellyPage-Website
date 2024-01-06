<?php
require 'config.php';

foreach ($_GET as $x) {
    $y = $x;
}

//storing the id value at database
#$insert = "insert into deleting (id) values ('$y')";
$insert = "update deleting set id='$y'";
mysqli_query($conection, $insert);


$sql = "select * from comment where id='$y' ";
$result = mysqli_query($conection, $sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comment box</title>
    <link rel="stylesheet" href="x .css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body>
    <div class="form-container">
        <form action="comment delete.php" method="post">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "Time:" . $row["time"] . "<br>";
                echo "Name:<br>" . $row["name"] . "<br>";
                echo "Email:<br>" . $row["email"] . "<br>";
                echo "Topic:<br>" . $row["subject"] . "<br>";
                echo "Comment:<br>" . $row["comments"] . "<br>";
            }
            ?>
            <label>
                <span style="display: inline;"><input type="radio" required name="<?php echo $y ?>">confirm to delete</span>
            </label>
            <input name="submit" type="submit" value="Delete" class="form-btn">
            <p>Want to go back<a href="table.php">Click here</a></p>
        </form>
    </div>
</body>

</html>