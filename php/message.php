<?php
  $name=$_POST["name"];
  $mail=$_POST["mail"];
  $contact=$_POST["contact"];
  $address=$_POST["address"];  
  //database insertion
  include("connection.php");
  
  $sql="INSERT INTO message
  (
	  name,
	  mail,
	  contact,
	  message
  )
  values('$name','$mail','$contact','$address')";
  
  $result=mysql_query($sql);
  if($result)
	  echo "<br>Data Inserted";
  else
	  echo die(mysql_error());
  ?>
<a href="../index.html"><br>Go Back!</a>  