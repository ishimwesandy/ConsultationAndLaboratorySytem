<?php
session_start();


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
<li class="active"><a href="customer.php">Profile</a></li>
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
		<div class="titlec">Send a Comment </div>
		<form action=""method="POST">
		<table border="0" id="taba">
	
<tr><td><div class="user">Email</div></td><td><input type="email" name="email"class="log"></td></tr>

<tr><td><div class="user">Comment</div></td><td>
	<textarea cols="30" rows="10" name="conve"></textarea>

</td></tr>

</table>
<input class="logina"type="submit"name="send"value="Send">
<!--s<meta HTTP-EQUIV="Refresh""" CONTENT="0; URL=customer_comment.php">-->
</form>
<!-- image slided<img src="image.gif" class="slide3">-->
</td>
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
$user="customer";
$date= date("Y-m-d");
if(empty($Email)or empty($Conversation)){
echo "<div class='pc'>Please Fill Well All Your Field</div>";}
elseif(preg_match("/^[a-zA-Z]\w+(\.\w+)*\@\w+(\.[0-9a-zA-Z]+)*\.[a-zA-Z]{2,4}$/", $_POST["email"]) === 0)
								{
								echo"<div class='pl3'>Invalid Email</div>";}
else{
mysql_query("INSERT INTO comment values(null,'$Email','$Conversation','$user','$date=datee')");
#mysql_query("INSERT INTO user SET USername='$Username',Pssword='$Password','$Usertype','$Firstname',
	#'$Lastname','$Email','$Telephone','$Identity')");

 echo"<div class='pc'>Your Message Has Been sent </div>";
}
}
?>