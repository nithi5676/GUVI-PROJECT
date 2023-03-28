<?php

extract($_POST);

?>

<?php
$servername = "localhost";
$usname = "root";
$pass = "";
$dbname = "guvi";
$count = 0;

$conn = new mysqli($servername, $usname, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$stmt = $conn->prepare("SELECT * FROM userprofile where username=? and passw=?");
$stmt->bind_param("ss", $uname, $pword);
$stmt->execute();
$result = $stmt->get_result();

$row = $result->fetch_array(MYSQLI_ASSOC);
// $a = $row["age"];
// $d = $row["dob"];
// $c = $row["contact"];

$rowcount = mysqli_num_rows($result);
$count = $rowcount;

if ($rowcount > 0)
  echo "<h1 style=\"color:black\";> <center>Login Successful, Welcome to my Home page </center></h1>";
else
  echo "<h1 style=\"color:red\";> <center>Invalid Username/Password </center></h1>";
mysqli_free_result($result);
$stmt->close();
mysqli_close($conn);
?>

<?php
if ($count >0) {
  ?>

  <script>

    localStorage.setItem("username", '<?php echo $uname; ?>');
    localStorage.setItem("password", '<?php echo $pword ?>');
    console.log("localStorage is successfully created");
  </script>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sign up</title>

  <!-- Link the Bootstrap CSS file -->
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>



  <!-- Link jQuery and jQuery Validation scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

  <!-- Link the Bootstrap JavaScript file -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js" integrity="sha512-v2cZlCgXa1U+42A7R0Prl4J4Eo0LRLM5YCB/v+O4GxJ5X05uk5o5P5Oe+5J4EzxxkbN4nmDX5IUIshieN5B/1A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- Link your custom JavaScript file -->
  <script src="../js/profile.js"></script>

</head>

<body>
  <div class="container">
    <form action="update.php" class="form" method="post" id="ProfileForm">
      <div class="header">
        <h1 class="title">Profile Entry</h1>
      </div>

      <div class="form-group">
        <label for="age">Age</label>
        <?php
          echo "<input type=\"number\" class=\"form-control\"  name=\"age\" id=\"age\" >"
            ?>
        </div>

        <div class="form-group">
          <label for="dob">DOB</label>
          <?php
          echo "<input type=\"date\" class=\"form-control\" id=\"dob\" name=\"dob\" >"
            ?>
        </div>

        <div class="form-group">
          <label for="contact">Contact</label>
          <?php
          echo "<textarea class=\"form-control\"  name=\"contact\" id=\"contact\" style=\"width:300px;height:100px;\"></textarea>"
            ?>
        </div>

        <?php
        echo "<input type=\"hidden\" name=\"uname\" value=$uname>";
        echo "<input type=\"hidden\" name=\"pword\" value=$pword>";
        ?>

        <button type="submit" class="btn btn-primary" id="update">Update</button>
      </form>
    </div>
  </body>

  </html>

  <?php
} ?>