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
<script type="text/javascript" src ="jquery.js"></script>

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
<li class="active"><a href="doctor.php" class="active">Customer</a>
<div id="sub-menu">
	<ul class="ul1">
	<li><a href="add_customer.php" class="active">Add Customer</a></li>
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
		<div class="titlea">Customer Registation Form</div>
		<form action=""method="POST" enctype="multipart/form-data">
		<table border="0" id="taba">
	

<tr><td class="user">Firstname:<input type="text" name="fname"
	value="<?php echo @$_POST['fname'];?>"class="log2" 
	>
Lastname:<input type="text" name="lname" 
value="<?php echo @$_POST['lname'];?>"class="log9" ></td></tr>


<tr><td class="user">
 Date of Birth:<input type="date" name="date"
 value="<?php echo $_POST['date'];?>"class="log3">
	Gender
<input type="radio" name="gender" value="male" class="male"
<?php echo @$_POST['gender']=="male"?"checked":"";?>>Male
<input type="radio" name="gender" value="female"
<?php echo @$_POST['gender']=="female"?"checked":"";?>>Female
</td></tr>

<tr><td class="user">District:<input type="text" name="district"
	value="<?php echo @$_POST['district'];?>"class="log4" >
Sector:<input type="text" name="sector"
value="<?php echo @$_POST['sector'];?>"class="log10" >

</td></tr>




<tr><td class="user" >Idenity Card:<input type="text" name="identity"class="log8"
	value="<?php echo @$_POST['identity'];?>"
onkeyPress="return desableNum(event)"maxlength="16">
Telephone:<input type="text" name="phone"class="log9"value="<?php echo @$_POST['Telephone'];?>"
onkeyPress="return desableNum(event)"maxlength="10">

<?php echo @$phone_number;?></td></tr>
<tr><td class="user" >Child Regist:<input type="text" name="child"class="log8"
	value="<?php echo @$_POST['child'];?>">
<?php echo @$phone_number;?></td></tr>

<tr><td class="user">Conversation:<textarea cols="20" rows="3" name="conv">
	<?php echo @$_POST['conv'];?></textarea>
<input type="file" name="photo"
value="
	<?php echo @$_POST['photo'];?>"class="log13"></td></tr>



</table>
<input class="logina"type="submit"name="login"value="Regist">
</form>
<?php
include ("connect.php");
if(isset($_POST['login'])){
$Firstname=strtoupper($_POST['fname']);
$Lastname=ucfirst($_POST['lname']);
$gender=@$_POST['gender'];
$date=$_POST['date'];
$District=ucfirst($_POST['district']);
$Sector=ucfirst($_POST['sector']);
$preg="-";
$Identity=$_POST['identity'];
$child=$_POST['child'];
$Telephone=$_POST['phone'];
$Conversation=$_POST['conv'];
$group="-";
$rh="-";
$gl="-";
$tes="-";
$photo=$_FILES['photo']['name'];
$phone_number="";
$datee= date("Y-m-d");
//$allowed_type = array("image/jpeg","image/gif","image/png");

$by = substr($date, 0,4); //1994-08-21		
$years = date("Y",time()) - $by;




 if( empty($Firstname)or empty($Lastname)or empty($gender)or empty($date)or 
 	empty($District)or empty($Sector)
   or empty($Telephone)or empty($Conversation)){


echo "<div class='add'>You have an empty field</div>";}

elseif(!preg_match("/^07[8,2,3]{1}[0-9]{7}+$/",$Telephone)){
	echo"<div class='add'>Invalid phone number</div>";}

elseif ($years >= 16 && empty($Identity)&& !preg_match("/^119[0-9]{13}+$/",$Identity)) {
	$Identity=null;

	echo"<div class='add'>invalid format Natinal Identity number?</div>";
								}
	elseif ($years <= 16 && empty($child)&& preg_match("/^C[0-9]{3}+$/",$child)) {
	$child=null;

	echo"<div class='add'>invalid format National Identity number?</div>";
								}



else{
	//!preg_match("/^[]+", subject)
	$sql1="SELECT *from customer where Telephone='$Telephone'  ";
$ex=mysql_query($sql1) or die(mysql_error());
if (mysql_num_rows($ex)==1) {
	
	echo"<div class='add'>This Phone Number or National Identity  is Already Exist in Our System</div>";
}

if(mysql_num_rows($ex)==0){
mysql_query("INSERT INTO customer values(null,'$Firstname','$Lastname','$gender','$date','$District','$gl',
	'$tes',
'$Sector','$preg','$Identity','$child','$Telephone','$photo','$Conversation','$group','$rh','$datee=datee')");
move_uploaded_file($_FILES['photo']['tmp_name'], "c:\\xampp\\htdocs\\exam\\gallery\\".$_FILES['photo']['name']);

#mysql_query("INSERT INTO user SET USername='$Username',Pssword='$Password','$Usertype','$Firstname',
	#'$Lastname','$Email','$Telephone','$Identity')");
unset($_POST);

 echo "<div class='add'>The Customer Has Been Inserted</div> <script>setTimeout('window.location=\"./add_customer.php\"',3000)</script>";
//echo $mess;
}
}
}
?>
<script type="text/javascript">
function desableNum(evt){
	var charCode=(evt.which)?evt.which:event.keyCode;
	
	if(charCode>31 &&(charCode<48 || charCode>57)){
		return false;
	}
	return true;
}
</script>

</td>
<!-- image slided<img src="image.gif" class="slide3">-->
</tr>
<tr>
<td colspan="6" class="footer">&copy Reserved by Sandy</td>
</tr>
</table>
</div>
</body>
</html>
