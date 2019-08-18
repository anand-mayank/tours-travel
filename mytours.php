<html>
<head>
<style type="text/css">
table,th,td{border:1px solid black;
border-collapse:collapse;}
table.gridtable{
	border-collapse:collapse;
	border-color:#666666;
	border-width: 1px;
	color:#333333;
	font-family:verdana,arial,sans-serif;
	font-size:11px;
}
#wrapper
{
height:1000px;
width:1150px;

background:url("images/mytour.jpg");
background-size: 1000px 500px;
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

width:1000px;
background-color:gray;
float:left;
}
#content
{
height:500px;
width:1000px;
background-color:white;
background:url("images/mytour.jpg");
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
<li><a href="userhome.php">Home</a></li>
<li><a href="usertours.php">Tours & Packages</a></li>
<li><a href="book.php">Book Now!</a></li>
<li><a href="mytours.php">My Tours</a></li>
</ul>
</div>
<div id="content">
<?php
session_start();
$uid=$_SESSION["uid"];
include("php/connection.php");
$sql="select * from book_tour";
$result=mysql_query($sql);
?>
<table style="font-size:12px"
class="gridtable">
<tr>
<th>User ID</th>
<th>Tour ID</th>
<th>Tour Name</th>
<th>Number of People</th>
<th>Date of Journey</th>
<th>Package Price</th>
</tr>
<?php
while($row=mysql_fetch_array($result))
{
	if("$row[user_id]"==$uid)
	echo"<tr>
	<td>$row[user_id]</td>
	<td>$row[tour_id]</td>
	<td>$row[name]</td>
	<td>$row[num]</td>
	<td>$row[day]/$row[month]/$row[year]</td>
	<td>Rs.$row[total]</td>
	";
}
?>
</table>
</div>
<div id="footer"><b class="copyright">&copy; Prepared by: </b> Mayank Anand.
	<br> "In association with S J C institute of technology" </br>
	<br> <b> Powered by: SJC Forum. Bangalore , India </b></br><b class="copyright">&copy; </b> Trip To Go Pvt-Ltd, All rights reserved</div></b>
</div></div>
</div>
</body>
</html>
