<?php
class mydetail
{
    public $name;
    public $age;
    public $email;

}

$myObj=new mydetail();

$myObj->name="Abbas";
$myObj->age=30;
$myObj->email="abbas@gmail.com";

$myJSON = json_encode($myObj);

echo $myJSON;
?>