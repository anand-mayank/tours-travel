<?php
  $tid=$_POST["tid"];
  $tname=$_POST["tname"];
  $price=$_POST["price"];
  $allowedExt=array("jepg","gif","jpg","png");
  $temp=explode(".",$_FILES["file"]["name"]);
  $extension=end($temp);
   if(($_FILES["file"]["size"]<20000000000 && in_array($extension,$allowedExt)))
  {
	  if($_FILES["file"]["error"]>0)
	  {
		  echo "Return Code:".$_FILES["file"]["error"]."<br>";
	  }
	  else
	  {
		  echo "Upload:" .$_FILES["file"]["name"]."<br>";
		  echo "Type:" .$_FILES["file"]["type"]."<br>";
		  echo "Size:" .$_FILES["file"]["size"]." kB<br>";
		  echo "Temp File:" .$_FILES["file"]["tmp_name"]."<br>";
		if(file_exists("upload/".$_FILES["file"]["name"]))
		{
			echo $_FILES["file"]["name"]." already exists";
			
		}
		else
		{
			move_uploaded_file($_FILES["file"]["tmp_name"],"../upload/".$_FILES["file"]["name"]);
			echo "Stored in :"."upload/".$_FILES["file"]["name"];
			$img="upload/".$_FILES["file"]["name"];
		}
	  }
	  
  }
  else{
	  echo "Invalid Image";
  }
  //database insertion
  include("connection.php");
  
  $sql="INSERT INTO tours
  (
	  tour_id,
	  name,
	  price,
	  image
  )
  values('$tid','$tname','$price','$img')";
  
  $result=mysql_query($sql);
  if($result)
	  echo "<br>Data Inserted";
		
  else
	  echo die(mysql_error());
  ?>
  <a href="../addtour.php"><br>Go Back</a>