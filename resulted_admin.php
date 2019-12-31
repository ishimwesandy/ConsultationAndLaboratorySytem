<?php
session_start();
if (!isset($_SESSION['username'])) {
header("location:index.php?msg= u must login first");
}
?>
<html>
<head>
<title>Admin</title>
<link rel="stylesheet" type="text/css"href="cssfile.css"/>
<link rel="shortcut icon" href="short.png"/>
</head >
<body bgcolor="042b3d">

<div id="container">
<div class="banner">
<img src="log2.png" class="img">
</div>

<table  align="center" border="0">
<tr>
	<div id="main-menu">
					<ul>
<li ><a href="admin.php" >Add Doctor</a>

<div id="sub-menu">
	<ul class="ul1">
	<li><a href="#">Add Exam</a></li>

		</ul>
	</div>
</li>

<li><a href="#" class="active">View</a>
<div id="sub-menu">
	<ul class="ul1">
	<li><a href="doctor_view.php">Doctor</a></li>
	<li><a href="resulted_admin.php" class="active"> Result Customer  </a></li>
		<li><a href="non_resulted.php"> No Result Customer  </a></li>
		</ul>
	</div></li>
<li><a href="#">View Comments</a>
	<div id="sub-menu">
	<ul class="ul1">
	<li><a href="comment_vd.php">Doctor Comment</a></li>
	<li><a href="comment_vc.php">Customer Comment </a></li>

		</ul>
	</div>
	</li>					
		<li><a href="logout.php">Logout</a>
<div id="sub-menu">
	<ul class="ul1">
	<li><a href="changepass2.php">Change Password</a></li>
		</ul>
	</div>
	</ul>
	</div> 			


</tr>
<tr>

	<td colspan="6" id="td2" valign="top">
		<!--<div class="t">--><p class="t">Welcome To Consultation And Laboratory Management System</p><!--</div>-->
<?php
include('connect.php');
$sql="SELECT *from customer  where blood_gr!='-'or Pregnacy-'-'or RH!='-' order by Customer_Id DESC  LIMIT 12";
$query=mysql_query($sql);
?>
<center>

<table border="1" class="tab12" align="center">
<tr>
	<td class="bg" >Number</td>
	<td class="bg" >Firstname</td>
<td class="bg">Lastname</td>
<td class="bg">District</td>
<td class="bg">Identity Card</td>
<td class="bg">Telephone</td>
<td class="bg">Pregnacy test</td>

<td class="bg">Groupe</td>
<td class="bg">RH</td>

</tr>
<?php
while($row=mysql_fetch_array($query)){	
?>

<tr>
	<td><?php echo $row['Customer_Id'];?></td>
<td><?php echo $row['Firstname'];?></td>
<td><?php echo $row['Lastname'];?></td>

<td><?php echo $row['District'];?></td>
<td><?php echo $row['National_Id'];?></td>
<td><?php echo $row['Telephone'];?></td>
<td align="center"><?php echo $row['Pregnacy'];?></td>

<td align="center"><?php echo $row['blood_gr'];?></td>
<td align="center"><?php echo $row['RH'];?></td>

<?php

}
?>
</table>					
		




</tr>
<tr>
<td colspan="6" class="footer">&copy Reserved by Sandy</td>
</tr>
</table>
</div>
</body>
</html>


