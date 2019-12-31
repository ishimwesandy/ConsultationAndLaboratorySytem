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
	<li><a href="resulted.php">  Result Customer  </a></li>

		</ul>
	</div></li>
<li><a href="#" class="active"> Comments</a>
	<div id="sub-menu">
	<ul class="ul1">
	<li><a href="nurse_comment.php" class="active">Send Comment</a></li>
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
		<div class="titlec">Send a Comment </div>
		<form action=""method="POST">
		<table border="0" id="taba">
	
<tr><td><div class="user">Email</div></td><td><input type="email" name="email"
	value="<?php echo@$_POST['email'];?>"class="log"></td></tr>

<tr><td><div class="user">Comment</div></td><td>
	<textarea cols="35" rows="10" name="conve" <?php echo @$_POST['conve'];?>></textarea>

</td></tr>

</table>
<input class="logina"type="submit"name="send"value="Send">
</form>
<!-- image slided<img src="image.gif" class="slide3">-->
</tr>
<tr>
<td colspan="6" class="footer">&copy Reserved by Sandy</td>
</tr>
</table>
</div>
</body>
</html>
<?php
include ("connect.php");
if(isset($_POST['send'])){
	
$Email=$_POST['email'];
$Conversation=$_POST['conve'];
$user="user";
$date= date("Y-m-d");
 if(empty($Email)or empty($Conversation)){
echo "<div class='pc'>Please Fill Well All Your Field</div>";}
elseif(preg_match("/^[a-zA-Z]\w+(\.\w+)*\@\w+(\.[0-9a-zA-Z]+)*\.[a-zA-Z]{2,4}$/", $_POST["email"]) === 0)
								{
								echo"<div class='pl3'>Invalid Email</div>";}
else{
	$sql1="SELECT *from comment where Email='$Email'";
$ex=mysql_query($sql1) or die(mysql_error());
if (mysql_num_rows($ex)==1) {
	echo"<div class='pl3'>This Email  is Already Exist in Our System</div>";}
if(mysql_num_rows($ex)==0){

mysql_query("INSERT INTO comment values(null,'$Email','$Conversation','$user','$date=datee')");
#mysql_query("INSERT INTO user SET USername='$Username',Pssword='$Password','$Usertype','$Firstname',
	#'$Lastname','$Email','$Telephone','$Identity')");

 echo"<div class='pc'>Your Message Has Been sent </div>";}
}
}
?>