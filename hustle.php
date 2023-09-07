<?php
//error_reporting(0);
$server="localhost";
$username="root";
$password="";
$con= mysqli_connect($server, $username, $password);

if(!$con){
    die("connection to the db" . mysqli_connect_error());
}
//echo "sucessfully connected";'
$phone=$_POST['phone'];
$password=$_POST['password'];
$sql = "INSERT INTO `fasal_login` (`phone`, `password`, `dt`)
     VALUES ('$phone', '$password', current_timestamp());";
?>