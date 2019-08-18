<?php
session_start();
include("connection.php");
$aid=$_POST["aid"];
$pwd=$_POST["pwd"];
$_SESSION["aid"]=$aid;
$_SESSION["pwd"]=$pwd;
$sql="select admin_id,password from admin_reg where admin_id='$aid' && password='$pwd'";
$result=mysql_query($sql);
if(mysql_num_rows($result))
	header("location:../adminhome.php");
else
	header("location:../adminlog.html");
?>