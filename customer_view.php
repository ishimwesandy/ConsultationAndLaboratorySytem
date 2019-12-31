<?php
session_start();
if (!isset($_SESSION['username'])) {
header("location:index.php?msg= u must login first");
}
?>
<html>
<head>
<title>Doctor</title>
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
<li class="active"><a href="doctor.php" class="active">Customer</a>
<div id="sub-menu">
	<ul class="ul1">
	<li><a href="add_customer.php">Add Customer</a></li>
	<li><a href="customer_view.php" class="active">Give Result </a></li>
	<li><a href="resulted.php">  Result Customer  </a></li>

		</ul>
	</div></li>
<li><a href="#"> Comments</a>
	<div id="sub-menu">
	<ul class="ul1">
	<li><a href="nurse_comment.php">Send Comment</a></li>
	<li><a href="comment_viewc.php">View Comment </a></li>


		</ul>
	</div>
	</li>	
	<li><a href="customer_v.php">View Customer</a></li>

	<li><a href="logout.php">Logout</a>
<div id="sub-menu">
	<ul class="ul1">
	<li><a href="changepass.php">Change Password</a></li>
		</ul>
	</div>
	</li>
	</ul>
	</div> 			

</tr>
<tr>

	<td colspan="6" id="td2" valign="top">
		<!--<div class="t">--><p class="t">Welcome To Consultation And Laboratory Management System</p><!--</div>-->
<?php
include('connect.php');
$sql="SELECT *from customer  where blood_gr='-' or Pregnacy-'-'or RH='-' order by Customer_Id DESC ";
$query=mysql_query($sql);
?>
<center>

<table border="1" class="tab12" align="center">
<tr>
	<td class="bg" >Number</td>
	<td class="bg" >Firstname</td>
<td class="bg">Lastname</td>
<td class="bg">Identity Card</td>
<td class="bg">Diabet</td>
<td class="bg">Glucose</td>
<td class="bg">Pregnacy test</td>

<td class="bg">Groupe</td>
<td class="bg">RH</td>
<td class="bg" colspan="2">Operation</td>
</tr>
<?php
while($row=mysql_fetch_array($query)){	
?>

<tr>
	<td><?php echo $row['Customer_Id'];?></td>
<td><?php echo $row['Firstname'];?></td>
<td><?php echo $row['Lastname'];?></td>

<td><?php echo $row['National_Id'];?></td>
<td align="center"><?php echo $row['diabet'];?></td>
<td align="center"><?php echo $row['glucose'];?></td>
<td align="center"><?php echo $row['Pregnacy'];?></td>

<td align="center"><?php echo $row['blood_gr'];?></td>
<td align="center"><?php echo $row['RH'];?></td>
<td > <a href="result_test.php? Customer_Id=<?php echo $row['Customer_Id'];?>"><div class="delete"> Result</div> </a></td>
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


