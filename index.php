<?php
session_start();
?>
<html>
<head>
<title>index</title>
<link rel="stylesheet" type="text/css"href="cssfile.css"/>
<link rel="shortcut icon" href="short.png"/>
</head >
<body bgcolor="042b3d">

<div id="container">
<div class="banner">
<img src="log2.png" class="img">
</div>

<table  align="center" border="0">
<tr><div id="wel">
	<ul >
<li><a href="index.php">Home</a></li>
<li><a href="service.php">Service</a></li>
<li><a href="help.php">Help</a></li>
<li><a href="contact.php">Contact</a></li>
<li><a href="result.php">Result</a></li>
</ul>
</div>
</tr>
<tr>

	<td colspan="6" id="td2" valign="top">
		<!--<div class="t">--><p class="t">Welcome To Consultation And Laboratory Management System</p><!--</div>-->
		<div class="title">Login</div>
		<form action=""method="POST">
		<table border="0" id="tab0">
	<tr>
<td><div class="user">Username</div></td><td><input type="text" name="uname"class="log"></td>
<tr><td><div class="user">Password</div></td><td><input type="password" name="psw"class="log"></td></tr>

</table>

<input class="login"type="submit"name="login"value="Login">
</form>

<img src="image.gif" class="slide">
<p class="f"><a href="#">Forget Password</a></p>

</tr>

<tr>
	<td colspan="6" class="footer">&copy Reserved by Sandy</td>
</tr>
</table>
</div>
</body>
</html>
<?php
include('connect.php');
$username=@$_POST['uname'];
$password=@$_POST['psw'];
if(isset($_POST['login'])){
$sql="SELECT *from user where 
Username='$username' AND Password='$password'";
$query=mysql_query($sql);
if(mysql_num_rows($query)==1){
	$row=mysql_fetch_array($query);
	$_SESSION['User_id']=$row['User_id'];
$_SESSION['username']=$row['Username'];
$_SESSION['password']=$row['Password'];
$_SESSION['Usertype']=$row['Usertype'];
if($_SESSION['Usertype']=='Admin'){
header("location:admin.php");
}	
if ($_SESSION['Usertype']=='Doctor'){
	header("location:doctor.php");
}

}
else{
echo "<div class='pl'>Username or Password Are Incorect</div>";
}
}
?>
