<?php
include('connect.php');
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
	<li><a href="resulted.php"> Result Customer  </a></li>

		</ul>
	</div></li>
<li><a href="doctor.php"> Comments</a>
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
	<li><a href="changepass.php" class="active">Change Password</a></li>
		</ul>
	</div>
	</li>
	</ul>
	</div> 			

</tr>
<tr>

	<td colspan="6" id="td2" valign="top">
		<!--<div class="t">--><p class="t">Welcome To Consultation And Laboratory Management System</p><!--</div>-->
		<p class="ch">CHANGE YOUR PASSWORD</p>
		<form action="" method="POST">
<table id="change">
	<tr>
<td class="user1">Username</td><td><input type="text"name="uname" class="log1"></td>
</tr>
<tr>
<td class="user1">Current Password</td><td><input type="password"name="oldp" class="log1"></td>
</tr>
<tr>
<td class="user1">New Password</td><td><input type="password"name="newp" class="log1"></td>
</tr>
<tr>
<td class="user1">Confirm Password</td><td><input type="password"name="conf" class="log1">
</td>

</tr>

</table>
<input type="submit"name="change"value="Change" class="change">
<?php
include('connect.php');
$id = $_SESSION['User_id'];
$sel = "SELECT* from user where User_id='$id'";
$query = mysql_query($sel);
$row = mysql_fetch_array($query);
$uname = $row['Username'];
$pass = $row['Password'];
if(isset($_POST['change'])){
	$username = $_POST['uname'];
	$oldp = $_POST['oldp'];
	$newp = $_POST['newp'];
	$conf = $_POST['conf'];

	$id = $_SESSION['User_id'];
	if(($oldp == $pass) and ($newp == $conf)){
	mysql_query("UPDATE user SET Username = '$username', Password = '$conf' where User_id='$id'");
				echo"<div class='ch'>Your Username or Password has changed</div>";}
	if(($oldp != $pass OR  $newp!=$conf)){
					echo "<div class='ch'>please enter correct Username or Password </div>";}
					elseif($newp!=$conf){
						echo "<div class='ch'>please enter correct Username or Password</div>";}
			}
?>

</form>
		
</td>
</tr>
<tr>
<td colspan="6" class="footer">&copy Reserved by Sandy</td>
</tr>
</table>
</div>
</body>
</html>
