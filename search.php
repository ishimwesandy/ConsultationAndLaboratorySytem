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
<li class="active"><a href="doctor.php">Customer</a>
<div id="sub-menu">
	<ul class="ul1">
	<li><a href="add_customer.php">Add Customer</a></li>
	<li><a href="customer_view.php">Give Result </a></li>
	<li><a href="#"> No Result Customer  </a></li>

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
		<p class="t">Welcome To Consultation And Laboratory Management System</p>


<table border="1" class="tab12" align="center">
	<form action="" method="POST">
<input type="text" name="search" placeholder="Search for a Patient" class="Sera">
<input type="submit" name="ch" class="see" value="Search">
</form>


<?php
include('connect.php');
 if (isset($_POST['ch'])) {
   	$Identity=$_POST['search'];
    $sql="SELECT *from customer WHERE National_Id like'%$Identity%' OR Customer_Id like %Customer_Id%'";
    $query=mysql_query($sql);
    if (mysql_num_rows($query)>0) {
?>
<table>
	<form action="search.php"method="POST">
<tr>
<td class="bg" >Number</font></td>
<td class="bg" >Firstname</font></td>
<td class="bg">Lastname</td>

<td class="bg">Identity Card</td>
<td class="bg">Telephone</td>

<td class="bg">Gender</td>
<td class="bg">Date of birth</td>
<td class="bg">Groupe</td>
<td class="bg">RH </td>
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
<td><?php echo $row['Telephone'];?></td>
<td><?php echo $row['sex'];?></td>
<td><?php echo $row['date'];?></td>


<td align="center"><?php echo $row['blood_gr'];?></td>
<td align="center"><?php echo $row['RH'];?></td>
<td > <a href="customerdelete.php? Customer_Id=<?php echo $row['Customer_Id'];?>"> <div class="delete">Delete</div> </a></td>
<td > <a href="update.php? Customer_Id=<?php echo $row['Customer_Id'];?>"> <div class="delete">Update</div> </a></td>

<?php
}
?>
</form>
<?php
}
else{
	echo "<div class='iinst'>No Record Found!!<div>";
}
}
?>
</table>
</td>					
</tr>
<tr>
<td colspan="6" class="footer">&copy Reserved by Sandy</td>
</tr>
</table>
</div>
</body>
</html>


