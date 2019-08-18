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
height:300px;
width:1000px;
background-color:white;
background:url("images/images.jpg");
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
<li><a href="">Messages</a></li>
<li>
		<a href="http://localhost/phpmyadmin/sql.php?server=1&db=trip_advisor&table=book_tour&pos=0">Booking</a>
</li>
</ul>
</div>
<div id="content">
<?php
include("php/connection.php");
$sql="select * from message";
$result=mysql_query($sql);
?>
<table style="font-size:12px"
class="gridtable">
<tr>
<th>Name</th>
<th>Email ID</th>
<th>Contact</th>
<th>Message</th>
</tr>
<?php
while($row=mysql_fetch_array($result))
{
	echo"<tr>
	<td>$row[name]</td>
	<td>$row[mail]</td>
	<td>$row[contact]</td>
	<td>$row[message]</td>
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
