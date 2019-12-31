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
<li ><a href="admin.php" class="active">Add Doctor</a>

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
	<li><a href="resulted_admin.php"> Result Customer </a></li>
		<li><a href="non_resulted.php"> No Result Customer  </a></li>
		</ul>
	</div></li>
<li><a href="#">View Comments</a>
	<div id="sub-menu">
	<ul class="ul1">
	<li><a href="comment_vd.php">Doctor Comment</a></li>
	<li><a href="comment_vc.php">Customer Comment </a></li>

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


		<div class="title">Nurse Registation Form</div>
		<form action=""method="POST">
		<table border="0" id="tab0">

	<tr>

<td><div class="user">Username</div></td><td><input type="text" name="uname"
value="<?php echo@$_POST['uname'];?>"class="log"></td>
<tr><td><div class="user">Password</div></td><td><input type="text" name="psw"
	value="<?php echo@$_POST['psw'];?>"class="log"></td></tr>
<tr><td><div class="user">Usertype</div></td>
	<td>
	<select name="user"class="log">
		<option> ---Select usertype---</option>
<option value="Admin"  
<?php echo @$_POST['user']=="Admin"?"selected":"";?>>Admin</option>
<option value="Doctor"  
<?php echo @$_POST['user']=="Doctor"?"selected":"";?>>Doctor</option>
	</select>

</td></tr>

<tr><td><div class="user">Firstname</div></td><td><input type="text" name="fname"
	value="<?php echo@$_POST['fname'];?>"class="log"></td></tr>
<tr><td><div class="user">Lastname</div></td><td><input type="text" name="lname"
	value="<?php echo@$_POST['lname'];?>"class="log"></td></tr>
<tr><td><div class="user">Email</div></td><td><input type="email" name="email"
	value="<?php echo@$_POST['email'];?>"class="log"></td></tr>
<tr><td><div class="user">Telephone</div></td><td><input type="text" name="phone"
	value="<?php echo @$_POST['Telephone'];?>"
onkeyPress="return desableNum(event)"maxlength="10"class="log"><?php echo @$phone_number;?></td></tr>
<tr><td><div class="user">Identity Card</div></td><td><input type="text" name="identity"
	value="<?php echo@$_POST['identity'];?>"onkeyPress="return desableNum(event)"maxlength="16"class="log"></td></tr>
</table>
<input class="login"type="submit"name="login"value="Regist">
</form>
<!--<img src="image.gif" class="slide3">-->





<script type="text/javascript">
function desableNum(evt){
	var charCode=(evt.which)?evt.which:event.keyCode;
	
	if(charCode>31 &&(charCode<48 || charCode>57)){
		return false;
	}
	return true;
}
</script>
<table  id='ins'>
<tr>
<td valign="top">

	
You Regist a doctor and give him a Username and Password and after <br>
you told him to change the his password <br>
or username that you give to him/her <br>
and you have the access to remove him 


</td>

</tr>

</table>
</tr>
<tr>
<td colspan="6" class="footer">&copy Reserved by Sandy</td>
</tr>
</table>
</div>
</body>
</html>
<?php
mysql_connect("localhost","root","");
mysql_select_db("laboratory")or die(mysql_error());
if(isset($_POST['login'])){
$Username=$_POST['uname'];
$Password=($_POST['psw']);
$Usertype=$_POST['user'];
$Firstname=$_POST['fname'];
$Lastname=$_POST['lname'];
$Email=$_POST['email'];
$Telephone=$_POST['phone'];
$Identity=$_POST['identity'];
$phone_number="";
$date= date("Y-m-d");

 if(empty($Username) or empty($Password) or empty($Usertype) or empty($Firstname) 
 	or empty($Lastname) or empty($Email) or empty($Telephone) or empty($Identity)){
echo "<div class='pl1'>Please Fill Well All Your Field</div>";}

elseif(preg_match("/^[a-zA-Z]\w+(\.\w+)*\@\w+(\.[0-9a-zA-Z]+)*\.[a-zA-Z]{2,4}$/", $_POST["email"]) === 0)
								{
								echo"<div class='pl1'>Invalid Email</div>";	

}
elseif(!preg_match("/^07[8,2,3]{1}[0-9]{7}+$/",$Telephone)){
	echo"<div class='pl2'>Invalid phone number</div>";}

	elseif (!preg_match("/^119[0-9]{13}+$/",$Identity)) {
	echo"<div class='pl2'>invalid format Natinal Identity number?</div>";
								}



else{
	$sql1="SELECT *from user where Telephone='$Telephone' or National_ID='$Identity'and Email='$Email' ";
$ex=mysql_query($sql1) or die(mysql_error());
if (mysql_num_rows($ex)==1) {
	echo"<div class='pl2'>This Telephone number or National Identity  is Already Exist in Our System</div>";}
if(mysql_num_rows($ex)==0){

mysql_query("INSERT INTO user values(null,'$Username','$Password','$Usertype','$Firstname',
	'$Lastname','$Email','$Telephone','$Identity','$date=datee')");
#mysql_query("INSERT INTO user SET USername='$Username',Pssword='$Password','$Usertype','$Firstname',
	#'$Lastname','$Email','$Telephone','$Identity')");


 echo"<div class='pl1'>The user Has Been Inserted</div><script>setTimeout('window.location=\"./admin.php\"',3000)</script>";}
}
}
