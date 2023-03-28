<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
<body style="background-color: white;">
<?php

    extract($_POST)
?>
<div class="center">
<h1 >
<center>Welcome <?php echo $_POST["username"]; ?> </center> 
</h1><br/>

<?php
   $servername = "localhost";
   $uname = "root";
   $pass= "";
   $dbname = "guvi";

   // Create connection
$conn = new mysqli($servername, $uname, $pass, $dbname);
// Check connection
if ($conn->connect_error) {  die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO userprofile (username,email,passw) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $email, $password);

$stmt->execute();

  echo "<h1 style=\"color:green\";><center> Sigup is sucessful </center></h1>";
  echo "<h2> <center>Click <button style=\"background:#c14949;color:white;padding:5px\";><a style=\"color:white\"; href=\"http://localhost/AK/login.html\">here</a></button> to Sign in </center></h2>";

$stmt->close();
$conn->close();
   
?>
 </div>
<style>
.center {
margin-top: 300px;
margin-left: 300px;
width: 50%;
border: 5px solid #000000;
padding-top: 10px;
border-radius: 50px;
}


</style>

</body>
</html>