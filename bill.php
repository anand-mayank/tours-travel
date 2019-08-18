<html>
<head>
<?php

?>
<style type="text/css">
#wrapper
{
height:1000px;
width:1150px;
background-color:blue;
background:url("images/bill.jpg");
background-size: 1197px 900px;
background-image:no-repeat;
float:left;
}
#side
{
height:1050px;
width:150px;
background-color:white;
float:left;
}
#header
{
height:100px;
width:1000px;
background-color:pink;
float:left;
}
#h1
{
height:100px;
width:150px;
background-color:lightgreen;
background:url("images/firstlogo.png");
background-size: 150px 100px;
background-image:no-repeat;
float:left;
}
#h2
{
height:100px;
width:850px;
background-color:lightgreen;
background:url("images/banner2.jpg");
background-size: 850px 100px;
background-image:no-repeat;
float:left;
}
#h3{
height:50px;
width:1000px;
background-color:red;
float:left;
}
#stt
{
float:right;
}
ul
{
list-style-type:none;
margin:0;
padding:0;
overflow=hidden;
background-color:green;
}
li
{
float:left;
}
li a
{
display:block;
color:white;
text-align:centre;
margin: 5px 45px;
padding: 14px 16px;
text-decoration:none;
}
li a:hover
{
background-color:darkblue;
}
#footer
{
height:50px;
width:1000px;
background-color:gray;
float:left;
}
#content
{
height:850px;
width:1000px;
background-color:white;
background:url("images/back.jpg");
background-size: 1000px 850px;
background-image:no-repeat;
float:left;
}
div.img{
margin:50px;
border:1px solid #ccc;
float:left;
width:180px;
}
</style>
</head>
<body>
<div id="wrapper">
<div id="side"></div>
<div id="header">
<div id="h1"></div>
<div id="h2">
<div id="stt">
<a href="logout.php">Log Out</a>
</div>
</div>
</div>
<div id="h3">
</div>
<div id="content">
<?php
session_start();
$uid=$_SESSION["uid"];
$tid=$_SESSION["tid"];
$name=$_SESSION["name"];
$num=$_SESSION["num"];
$day=$_SESSION["day"];
$month=$_SESSION["month"];
$year=$_SESSION["year"];
$total=$_SESSION["total"];
 //database insertion
  include("php/connection.php");

  $sql="INSERT INTO book_tour
  (
	  user_id,
	  tour_id,
	  name,
	  num,
	  day,
	  month,
	  year,
	  total
  )
  values('$uid','$tid','$name','$num','$day','$month','$year','$total')";

  $result=mysql_query($sql);
  if($result)
	  echo "<br><h1>Bill</h1>
			<br>User ID : ".$uid
			 ."<br>Tour_ID:".$tid
			 ."<br>Tour Name:".$name
			 ."<br>No. of people:".$num
			 ."<br>Date of Journey:".$day."/".$month."/".$year
			 ."<br>Total : Rs.".$total
       ."<br>Your Ticket will be sent over your Email based on the availability."
       ."<br>Kindly Check your email or you may also contact us"
       ."<br> Thanks For Booking  ";
  else
	  echo die(mysql_error());
  ?>
<a href="book.php"><br>Go Back</a>
<a href="contact.html"><br>Contact Us</a>
</div>
<div id="footer"><b class="copyright">&copy; Prepared by: </b> Mayank Anand.
  <br> "In association with S J C institute of technology" </br>
  <br> <b> Powered by: SJC Forum. Bangalore , India </b></br><b class="copyright">&copy; </b> Trip To Go Pvt-Ltd, All rights reserved</div></b>
</div></div>
</div>
</body>
</html>
