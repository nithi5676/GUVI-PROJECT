<html>
        <head><link rel="stylesheet" type="text/css" href="css/styles.css" /></head>
<body>
<script>
    let uname=localStorage.getItem("username");
    let password=localStorage.getItem("password");
    let age=localStorage.getItem("age");
    let dob=localStorage.getItem("dob");
    let contact=localStorage.getItem("contact")

    function clear()
    {
        if(confirm("Are you interested to clear all session variable from localStorage"))
        {
        localStorage.clear();
        alert("Session Variable values are cleared");
        window.location.reload();
        }

        
    } 


</script>
<?php

    echo "<h1><center> Dear <script> document.writeln(uname); </script></center> </h1> <hr>";
    
?>
<div class="center">
<table border="1px"><center>
<tr>
        <th> Variables  </th>
        <th> Values</th>
</tr>

<tr>
        <td> username  </td>
        <td> <script> document.writeln(uname); </script> </td>
</tr>

<tr>
        <td> password </td>
        <td> <script> document.writeln(password); </script> </td>
</tr>

<tr>
        <td> age </td>
        <td> <script> document.writeln(age); </script> </td>
</tr>

<tr>
        <td> dob </td>
        <td> <script> document.writeln(dob); </script> </td>
</tr>

<tr>
        <td> contact </td>
        <td> <script> document.writeln(contact); </script> </td>
</tr></center>


</table>

<h1>
<a> <center><button><a style="color:black"; href="Javascript:clear()">Click here </a></button><br>Delete variables from LocalStorage </center></a>
</h1><a>
<center><button><a style="color:black"; href="redisstore.php"> Click to redis </a></button></h1>
</div>
</body>

<style>
table, td, th {  
  border: 2px solid #000000;
  text-align: left;
  margin-left: auto;
  margin-right: auto;
}

.center {
margin-top: 80px;
height: 600px;
width: 50px;
margin-left: 300px;
width: 60%;
padding-top: 10px;
background-color:#c14949;
border-radius: 50px;
}

table {
  border-collapse: collapse;
  width: 50%;
  background-color: white;
}

th, td {
  padding: 15px;
}

button{
        border-radius: 50px;
        padding: 15px 32px;
        background-color: rgb(219, 115, 115)
}
</style>
</html>