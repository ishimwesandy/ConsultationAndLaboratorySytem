<?php
session_start();
if (!isset($_SESSION['username'])) {
header("location:index.php?msg= u must login first");
}
?>

<?php
include ("connect.php");
$id=$_GET['User_id'];
$sql="SELECT *FROM user where User_id=$id";
$exec=mysql_query($sql);
$row=mysql_fetch_array($exec);

if(isset($_POST['update'])){
$Username=$_POST['uname'];
$Password=($_POST['psw']);
$Usertype=$_POST['user'];
$Firstname=$_POST['fname'];
$Lastname=$_POST['lname'];
$Email=$_POST['email'];
$Telephone=$_POST['phone'];
$Identity=$_POST['identity'];
$sql="UPDATE user SET
           Username='$Username',
          Password='$Password',
           Usertype='$Usertype',
           Firstname='$Firstname',
          Lastname='$Lastname',
           Email='$Email',
           Telephone='$Telephone',
           National_ID='$Identity'
           WHERE User_id='$id'";
           $exec=mysql_query($sql);
 header("location:doctor_view.php");
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
<li class="active"><a href="admin.php">Add Doctor</a></li>
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
	<li><a href="logout.php">Logout</a></li>
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
		<div class="title">Nurse Registation Form</div>
		<form action=""method="POST">
		<table border="0" id="tab0">
	<tr>
<td><div class="user">Username</div></td><td><input type="text" name="uname"
class="log" value=<?php echo $row['Username'];?>></td>
<tr><td><div class="user">Password</div></td><td><input type="text" name="psw"
	class="log"value=<?php echo $row['Password'];?>></td></tr>
<tr><td><div class="user">Usertype</div></td>
	<td>
	<select name="user"class="log">
		
<option value="Admin"  
<?php echo @$_POST['user']=="Admin"?"selected":"";?>>Admin</option>
<option value="Doctor"  
<?php echo @$_POST['user']=="Doctor"?"selected":"";?>>Doctor</option>
	</select>

</td></tr>

<tr><td><div class="user">Firstname</div></td><td><input type="text" name="fname"
	class="log" value=<?php echo $row['Firstname'];?>></td></tr>
<tr><td><div class="user">Lastname</div></td><td><input type="text" name="lname"
	class="log"value=<?php echo $row['Lastname'];?>></td></tr>
<tr><td><div class="user">Email</div></td><td><input type="email" name="email"
	class="log"value=<?php echo $row['Email'];?>></td></tr>
<tr><td><div class="user">Telephone</div></td><td><input type="text" name="phone"
	class="log"value=<?php echo $row['Telephone'];?>></td></tr>
<tr><td><div class="user">Identity Card</div></td><td><input type="text" name="identity"
	class="log"value=<?php echo $row['National_ID'];?>></td></tr>
</table>
<input class="login"type="submit"name="update"value="Update">
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

 
