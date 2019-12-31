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
<li class="active"><a href="admin.php">Add Doctor</a>

<div id="sub-menu">
	<ul class="ul1">
	<li><a href="#">Add Exam</a></li>

		</ul>
	</div>
</li>

<li><a href="admin.php">View</a>
<div id="sub-menu">
	<ul class="ul1">
	<li><a href="doctor_view.php">Doctor</a></li>
	<li><a href="#">Customer Result </a></li>
	<li><a href="#"> No Result Customer  </a></li>
		</ul>
	</div></li>
<li><a href="#">View Comments</a>
	<div id="sub-menu">
	<ul class="ul1">
	<li><a href="#">Nurse Comment</a></li>
	<li><a href="#">Customer Comment </a></li>

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
<p class="inst">
53454355
sfgjhgljdgbfjzfl
fdhx
fghfgh
s
h
fdh
dfh
d
h
d
</p>
		<div class="title">Registration of Exam</div>
		<form action=""method="POST">
		<table border="0" id="tab0">


<tr><td><div class="user">Exan Name</div></td><td><input type="text" name="Exam"
	value="<?php echo@$_POST['Exam_name'];?>"class="log"></td></tr>
<tr><td><div class="user">Description</div></td><td><input type="text" name="desc"
	value="<?php echo@$_POST['Description'];?>"class="log"></td></tr>


</table>
<input class="login"type="submit"name="login"value="Regist">
</form>
<!--<img src="image.gif" class="slide3">-->

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
if(isset($_POST['login'])){
$Exam=$_POST['Exam'];
$desc=($_POST['desc']);

 if(empty($Exam) or empty($desc)){
echo "<div class='pl1'>Please Fill Well All Your Field</div>";
}



else{ 	
	
mysql_query("INSERT INTO exam values(null,'$Exam','$desc')");
#mysql_query("INSERT INTO user SET USername='$Username',Pssword='$Password','$Usertype','$Firstname',
	#'$Lastname','$Email','$Telephone','$Identity')");

 echo"<div class='pl1'>The Exam  Has Been Inserted</div>";}
}


