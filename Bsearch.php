<?php
session_start();
if ($_SESSION['id']==false)
{
	header("location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Bus added page1</title>
<style>
#container	{   		
		width:80%;
		height:440px;
		background:#CCFFCC;
		}

#banner		{
		width:100%;
		height:100px;
		background:#66CC00;
		}

#header		{
		font-size:34px;
		padding-top:25px;
		text-align:left;
		padding-left:35px;
		}

#leftPart	{
		width:22%;
		height:340px;
		float:left;
		background:#99FFCC;
		}

#middlePart	{
		width:78%;
		height:380px;
		}

#gg	{
	width:100%;
	height:100px;
	text-align:center;
	font-size:16px;
	padding-top:12px;
	border-bottom:2px solid black;
	}

#gg a	{
	color:black;
	text-decoration:none;
	}

#sideMenu	{
		width:100%;
		height:300px;
		padding-top:0px;	
		}

#list	{
	color:black;
	padding-top:2px;
	list-style-type:none;
	float:left;
	}

#sideMenu a	{
		padding-left: 55px;
  		text-decoration: none;
  		font-size: 18px;
  		color: black;
  		display: block;
		padding-top:5px;
 		}

img	{
	width:50px;
	height:50px;
	}

#ss	{
	color:#006600;
	}

#footer	{
	width:80%;
	height:60px;
	background:#202020;
	}

#ft	{
	padding-top:20px;
	color:#FFFFFF;
	letter-spacing:1px;
	font-family:arial;
	font-size:14px;
	text-decoration:none;
	}
#rt	{
	width:500px;
	height:200px;
	background:white;
	margin-left:200px;
	}
#tb	{
	width:500px;
	height:200px;
	background:white;
	padding-top:15x;
	}
#hh	{
	padding-top:10px;
	}
#btn	{
	width:80px;
	height:25px;
	background:#99FF99;
	margin-left:100px;
	margin-top:10px;
	}
th	{
	text-align:left;
	}
</style>
</head>
<body>
<center>
<div id="container">
<div id="banner">
	<div id="header">
		<b><font color="white">Bus Reservation System </font></b>
	</div>
</div>

  	<!-----------Left part -------------------!>
<div
<div id="leftPart">
<div id="gg">
<img src="user.png"><br>
<p><strong>Logged :</strong>
	<?php
		echo $_SESSION['userid'];
	?>
	</div>
<div id="sideMenu">
		<li id="list"><a href="Uhome.php">User Home</a></li>
		<li id="list"><a href="Bsearch.php">Search Bus</a></li>
		<li id="list"><a href="cancel1.php">Search Ticket</a></li>
		<li id="list"><a href="logout1.php"><b>Logout</b></a> </li>
	</div>
</div>

	<!-----------Middle part -------------------!>

<div
<div id="middlePart">
<div id="rt">
<h2 id="hh">Search Bus for Booking</h2> 
<div id="tb">

	<form name='f1' method='post'  action='Bbooking1.php'>
	<table>

		<tr>		
		<th>Source</th>
		
<td><select name="sre">
<option value="source">select</option>

<?php

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("atpl",$con);

$sql="select distinct source from bus_schedule";

$result=mysql_query($sql,$con); //F9

while($row=mysql_fetch_array($result))
{
$d=$row['source'];
echo "<option value='$d'>$d</option>";	
}

?>
</select>			  
</td>
	
		</tr>
		<tr>
		<th>Destination</th>
			<td><select name="dest">
<option value="destination">select</option>

<?php

$con=mysql_connect("localhost","root","");
$db=mysql_select_db("atpl",$con);

$sql="select distinct destination from bus_schedule";

$result=mysql_query($sql,$con); //F9

while($row=mysql_fetch_array($result))
{
$d=$row['destination'];
echo "<option value='$d'>$d</option>";	
}

?>
</select>			  
</td>
		</tr>
		
		<tr>
		<th>Date of journy</th>
		<td>
			<select class="month" name="month">
              		<option value="">month</option>
              		<?php
			for($j=1;$j<=12;$j++)
				echo "<option>".$j."</option>";
			  ?>
            		</select>
		</td>
		
		<td>	 <select class="date" name="date">
              		<option value="">Date</option>
              		<?php
			for($i=1;$i<=31;$i++)
			echo "<option>".$i."</option>";
			  ?>
            		</select>
		</td>
		
		<td>
			<select class="year" name="year">
              		<option value="">Year</option>
              		<?php
				echo "<option>".date("Y")."</option>";
			  ?>
            	</select>
		</td>
		</tr>
		
		<tr><td colspan="4"><input type="submit" name="sub" value="SEARCH" id="btn"></td></tr>

		
		</table>
	</form>

</div>
</div>
</div>

	<!-----------Footer part -------------------!>
</div>
<div id="footer">
<div id="ft">
		&copy; Copyright and All right reserved	2021 &nbsp; | &nbsp;&phone;+91-8910244147
		</div>
</div>

</body>
</center>
</html>
	