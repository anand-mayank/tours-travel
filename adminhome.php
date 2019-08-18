<html>
<head>
<style type="text/css">
#wrapper
{
height:1000px;
width:1150px;
background-color:blue;
background:url("images/admin.jpg");
background-size: 1157px 900px;
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
background-color:black;
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
background:url("images/blur.png");
background-size: 1197px 900px;
background-image:no-repeat;
float:left;

}
#footer
{

width:1000px;
background-color:gray;
float:left;
}
#content
{
height:500px;
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
<ul>
<li><a href="adminhome.php">Home</a></li>
<li><a href="packages.php">Tour's Modification</a></li>
<li><a href="addtour.php">Add Tour</a></li>
<li><a href="viewmessage.php">Messages</a></li>
<li>
		<a href="http://localhost/phpmyadmin/sql.php?server=1&db=trip_advisor&table=book_tour&pos=0">Booking</a>
</li>
</ul>
</div>
<div id="content">
<?php
session_start();
include("php/connection.php");
$aid=$_SESSION["aid"];
$sql="select * from admin_reg";
$result=mysql_query($sql);
while($row=mysql_fetch_array($result))
	if("$row[admin_id]"==$aid)
{
	echo"
	<p><h1>My Details</h1></p>
	<p><b><u>User ID:</u></b>$row[admin_id]</p>
	<p><b><u>Name:</u></b>$row[name]</p>
	<p><b><u>Email ID:</u></b>$row[mail]</p>
	<p><b><u>Contact No.:</u></b>$row[contact]</p>
	<p><b><u>Address:</u></b>$row[address]</p>
	<p><b><u>Gender:</u></b>$row[gender]</p>";
}
?>
</div>
<div id="footer">
	<b class="copyright">&copy; Prepared by: </b> Mayank Anand.
			<br> "In association with S J C institute of technology" </br>
			<br> <b> Powered by: SJC Forum. Bangalore , India </b></br></div>
</div>
</body>
</html>
