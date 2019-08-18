<?php
session_start();
include("connection.php");
$uid=$_POST["uid"];
$pwd=$_POST["pwd"];
$_SESSION["uid"]=$uid;
$_SESSION["pwd"]=$pwd;
$sql="select user_id,password from reg where user_id='$uid' && password='$pwd'";
$result=mysql_query($sql);
if(mysql_num_rows($result))
	header("location:../userhome.php");
else
	header("location:../userlog.html");
?>