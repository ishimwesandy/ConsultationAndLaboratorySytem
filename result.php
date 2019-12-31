<?php
session_start();
include ("connect.php");
?>
<html>
<head>
<title>result</title>
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
	<form action=""method="POST">	
 
<div id="result">
<div class="id">You Must Use Your ID</div>
	<input type="text" name="result" id="re">
<input type="submit"name="search" value="Result"class="search">
</form>
<?php
if(isset($_POST['search'])){
$result=$_POST['result'];
$sql=" SELECT *from customer where National_Id='$result' or child='$result'";
$exe=mysql_query($sql);
if (mysql_num_rows($exe)>0) {
$re=mysql_fetch_array($exe);
$_SESSION['id']=$re['Customer_Id'];
$_SESSION['fname']=$re['Firstname'];


header('location:customer.php');



echo "Welcome";	
}else{
	echo "<div class='id'>Your ID is not include in this system</div>";
}





}



?>
</div>
  
</tr>

<tr>
	<td colspan="6" class="footer">&copy Reserved by Sandy</td>
</tr>
</table>
</div>
</body>
</html>

