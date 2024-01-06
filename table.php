<?php
require 'config.php';
$sql = "select * from comment";
$result = mysqli_query($conection, $sql);
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

   <!-- -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">   <!--this link is need-->
 
  

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <title>Table Page</title>
</head>

<body>


  <div class="row">
    <div class="container"><br>
      <h2 class="mb-5">&nbsp;Comments &nbsp; <a href="index.php">goHome</a> &nbsp; <a href="change pin.php">changePin</a></h2>


      <div class="container">

        <table class="table table-striped table-hover  table-responsive">
          <thead>
            <tr>

              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Time</th>

              <th scope="col">More Info</th>
            </tr>
          </thead>
          <tbody>



            <!--displaying commnects-->
            <?php
            if (mysqli_num_rows($result) > 0) {
              #output data from each row
              while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <!--table rows-->
                <tr scope="row">
                  <td><?php echo $row["id"] ?> </td>
                  <td><?php echo $row["name"] ?></td>
                  <td><?php echo $row["email"] ?> </td>
                  <td><?php echo $row["time"] ?></td>
                  <td><a href="comment.php?id=<?php echo $row["id"] ?>">details</a></td>
              <?php
              }
            }
              ?>


          </tbody>
        </table>
      </div>


    </div>

  </div>



 
</body>

</html>


<!-- 
edited by kavinda kiridana
more information go to this link below
https://www.linkedin.com/in/kavinda-kiridana-8a330521a/
 -->