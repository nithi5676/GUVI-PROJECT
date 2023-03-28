<html>
<?php

   extract($_POST);

   if(!isset($age))
   {

?>

<body >
<div class="center">
    <center>
    <form method="post" action="redisstore.php" >

      <h1>
      <?php
      echo "<h1> Writing to Redis</h1>";
        ?>
       </h1>
        <div>
        <label class="label"> Name :</label><br>
        <input type="text"class="input" name="uname" id="uname"/> 
         </div><br>
         <div>
         <label class="label"> Age : </label><br>
        <input type="text" class="input" name="age" id="age"/>
</label>
</div><br>
        <div>
        <label class="label"> DOB :</label><br>
        <input type="text" class="input" name="dob" id="dob"/>
</div><br>
        <div>
        <label class="label"> Contact : </label>
        <input type="text" class="input" name="contact" id="contact"/>
</div><br>

<div>
      <input type="submit" class="class" value="Writinging into Redis"/>

</div><br>
   </div>


    <form>
    </center>
        
</body>

<?php
   }
   else
   {
    echo "<h1> Sending the Session Data to redis server </h1>";

    require_once '../vendor/autoload.php';

    $redis=new Predis\Client();
   
    echo "<h1>". $redis->ping().", connected to backend redis server </h1>";


   $redis->set("username",$uname);

   echo "<h1> username stored in redis:: " .$redis->get("username")."</h1>"; 
   
   $redis->set("dob",$dob);

   echo "<h1> DOB stored in redis:: " .$redis->get("dob")."</h1>"; 
      
   $redis->set("age",$age);

   echo "<h1> Age stored in redis:: " .$redis->get("age")."</h1>"; 
      

   $redis->set("contact",$contact);

   echo "<h1> Contact stored in redis:: " .$redis->get("contact")."</h1>"; 
      



   }

?>

<style>
    .class{
        width: 40%;
        height: 40px;
        border-radius: 50px;
    }

    .label{
       padding-right: 700px;
       font-weight: 900;
       margin-left: 40px;
    }
    .input{
        height: 40px;
        width: 80%;
        border-radius: 50px;
    }
    .center {
        background-color:#c14949;
        margin-top: 150px;
        margin-left: 450px;
        width: 50%;
        padding-top: 10px;
        border-radius: 50px;
    }


</style>


<script>
    let uname=localStorage.getItem("username");
    console.log(uname)
    let password=localStorage.getItem("password");
    let age=localStorage.getItem("age");
    let dob=localStorage.getItem("dob");
    let contact=localStorage.getItem("contact")
    
    document.getElementById('uname').value=uname;
    document.getElementById('age').value=age;
    document.getElementById('dob').value=dob;
    document.getElementById('contact').value=contact;

</script>

</html>