<html>
<head>
<script type="text/javascript">
function validation()
{
var RE_NUM=/^(\d)+$/;
var u1=document.getElementById("td").value;
var u2=document.getElementById("nam").value;
var u3=document.getElementById("n").value;
var u5=document.getElementById("d").value;
var u6=document.getElementById("m").value;
var u7=document.getElementById("y").value;
if(u1=="")
{
alert("Tour ID cannot be left blank");
return false;
}
if(u2=="")
{
alert("Tour Name cannot be left blank");
return false;
}
if(u3=="")
{
alert("Number of people cannot be left blank");
return false;
}
if(!RE_NUM.test(u3))
{
alert("Number of people should be numeric");
return false;
}
if(u5=="")
{
alert("Day cannot be left blank");
return false;
}
if(!RE_NUM.test(u5))
{
alert("Day should be numeric");
return false;
}

if(u6=="")
{
alert("Month cannot be left blank");
return false;
}
if(!RE_NUM.test(u6))
{
alert("Month should be numeric");
return false;
}

if(u7=="")
{
alert("Year cannot be left blank");
return false;
}
if(!RE_NUM.test(u6))
{
alert("Year should be numeric");
return false;
}
}
</script>
<style type="text/css">
#wrapper
{
height:1000px;
width:1150px;

background:url("images/mytour.jpg");
background-size: 1197px 850px;
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
background:url("images/back.jpg");
background-size: 1000px 500px;
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
<h1>Book A Tour!</h1>
<form  name="f3" onsubmit="return validation()" action="php/booktour.php" method="post">
<p><table>
<tr>
<td>Tour ID</td>
<td><input type="text" name="tid" id="td">
</td></tr>
<tr>
<td>Tour Name</td>
<td><input type="text" name="name" id="nam">
</td></tr>
<tr>
<td>No. of people</td>
<td><input type="text" name="num" id="n">
</td></tr>
<tr>
<td>Date of Journey</td>
<td><textarea rows="1" cols="2" name="day" id="d"></textarea>
<textarea rows="1" cols="2" name="month" id="m"></textarea>
<textarea rows="1" cols="4" name="year" id="y"></textarea>
</td></tr>
<tr>
<td>
<input type="Submit" value="Book Now">
<input type="Reset" value="Cancel">
</td></tr>
</table></form>
</p>
</div>
<div id="footer"><b class="copyright">&copy; Prepared by: </b> Mayank Anand.
  <br> "In association with S J C institute of technology" </br>
  <br> <b> Powered by: SJC Forum. Bangalore , India </b></br><b class="copyright">&copy; </b> Trip To Go Pvt-Ltd, All rights reserved</div></b>
</div></div>
</div>
</body>
</html>
