<?php
session_start();
if (!isset($_SESSION['fname'])) {
header("location:index.php?msg= u must login first");
}
?>
<?php
include("connect.php");
$id=$_SESSION['id'];
$sql="SELECT *from customer where customer_Id='$id' and blood_gr!='-'";
$exe=mysql_query($sql);
$res=mysql_fetch_array($exe);
?>
<html>
<head>
<title>Customer</title>
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
<li class="active"><a href="customer.php"> Profile</a></li>
<li class="active"><a href="print_result.php" target="_blank">View Result</a></li>
<li><a href="customer_comment.php"> Send Comments</a>
	</li>					
	<li><a href="logout.php">Logout</a></li>
	</ul>
	</div> 			

</tr>
<tr>

	<td colspan="6" id="td2" valign="top">
		<!--<div class="t">--><p class="t">Welcome To Consultation And Laboratory Management System</p><!--</div>-->
		<p class="name1">welcome</p> &nbsp;
  <?php
echo "<div id='name'>".$_SESSION['fname']."</div>";
?><span>
<img src="./gallery/<?php echo $res['photo'];?>" width="100" height="100" class="prof">
</span>
<center>
	<font size="5">
		<br><br>
<b>You may see your result now and <br>
if you want you may give us your Aidea
and<br> If you found in your result is not go
 you may go <br>to the hospital in order to cure you
</b>
</font>
</center>
</td>
</tr>
<tr>
<td colspan="6" class="footer">&copy Reserved by Sandy</td>
</tr>
</table>
</div>
</body>
</html>
