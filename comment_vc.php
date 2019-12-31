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

<li><a href="#" >View</a>
<div id="sub-menu">
	<ul class="ul1">
	<li><a href="doctor_view.php">Doctor</a></li>
	<li><a href="resulted_admin.php"> Result Customer  </a></li>
		<li><a href="non_resulted.php"> No Result Customer  </a></li>
		</ul>
	</div></li>
<li><a href="#" class="active">View Comments</a>
	<div id="sub-menu">
	<ul class="ul1">
	<li><a href="comment_vd.php">Doctor Comment</a></li>
	<li><a href="comment_vc.php" class="active">Customer Comment </a></li>

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
		<p class="name1">welcome</p> &nbsp;
				<?php
echo "<div id='name'>".$_SESSION['username']."</div>";

?>
		<?php
include('connect.php');
$sql="SELECT *from comment where Usertype='customer' order by datee ";

$query=mysql_query($sql);
?>
<center>
<table border="0"  class="tab12">
<tr>
<td class="bg" >Email</td>
<td class="bg" >Message</td>
</tr>
<?php
while($row=mysql_fetch_array($query)){	
?>
<tr>
	<td><?php echo$row['Email'];?></td>
<td><?php echo $row['Comment'];?></td>
<?php

}
?>
</table>	

<tr>
<td colspan="6" class="footer">&copy Reserved by Sandy</td>
</tr>
</table>
</div>
</body>
</html>
