<?php
  $uid=$_POST["uid"];
  $pwd=$_POST["pwd"];
  $name=$_POST["name"];
  $mail=$_POST["mail"];
  $contact=$_POST["contact"];
  $address=$_POST["address"];
  $GND=$_POST["Gender"];
  
  //database insertion
  include("connection.php");
  
  $sql="INSERT INTO reg
  (
	  user_id,
	  password,
	  name,
	  mail,
	  contact,
	  address,
	  gender
  )
  values('$uid','$pwd','$name','$mail','$contact','$address','$GND')";
  
  $result=mysql_query($sql);
  if($result)
  
	  echo "<br>Data Inserted";
			
  else
	  echo die(mysql_error());
  ?>
  <a href="../index.html"><br>Go Back</a>