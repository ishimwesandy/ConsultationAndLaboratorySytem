<?php
session_start();
if (!isset($_SESSION['username'])) {
header("location:index.php?msg= u must login first");
}
?>


<?php
include ("connect.php");
$id=$_GET['Customer_Id'];
$sql="SELECT *FROM customer where Customer_Id=$id";
$exec=mysql_query($sql);
$row=mysql_fetch_array($exec);

if(isset($_POST['update'])){
$Firstname=$_POST['fname'];
$Lastname=($_POST['lname']);
$gender=@$_POST['gender'];
$date=$_POST['date'];
$District=$_POST['district'];
$Sector=$_POST['sector'];
$Identity=$_POST['identity'];
$Telephone=$_POST['phone'];
$Conversation=$_POST['conv'];
$group="-";
$rh="-";
$photo=$_FILES['photo']['name'];
$id=$_GET['Customer_Id'];
$sql="UPDATE customer SET
           Firstname='$Firstname',
           Lastname='$Lastname',
           sex='$gender',
           date='$date',
           District='$District',
           Sector='Sector',
           National_Id='$Identity',
           Telephone='$Telephone',
           Conversation='$Conversation',
           photo='$photo'
           WHERE Customer_Id='$id'";
$exec=mysql_query($sql);
 header("location:customer_v.php");
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
	<li><a href="#"> No Result Customer  </a></li>

		</ul>
	</div></li>
<li><a href="doctor.php"> Comments</a>
	<div id="sub-menu">
	<ul class="ul1">
	<li><a href="nurse_comment.php">Send Comment</a></li>
	<li><a href="#">View Comment </a></li>


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
	

<tr><td class="user">Firstname:<input type="text" name="fname"class="log2" 
	placeholder="Firstname" value=<?php echo $row['Firstname'];?>>
Lastname:<input type="text" name="lname"value=<?php echo $row['Lastname'];?> class="log9" placeholder="Lastname"
></td></tr>


<tr><td class="user">
 Date of Birth:<input type="date" name="date" class="log3"value=<?php echo $row['date'];?>>
	Gender
<input type="radio" name="gender" value="male" class="male"
<?php echo @$row['sex']=="male"||@$_POST['gender']=="male"?"checked":""; ?>>Male

<input type="radio" name="gender" value="female"
<?php echo @$row['sex']=="female"||@$_POST['gender']=="female"?"checked":""; ?>>Female
</td></tr>

<tr><td class="user">District:<input type="text" name="district"class="log4" placeholder="District"
	value=<?php echo $row['District'];?>>
Sector:<input type="text" name="sector"class="log10" placeholder="Sector"
value=<?php echo $row['Sector'];?>></td></tr>


<tr><td class="user" >Idenity Card:<input type="text" name="identity"class="log8" placeholder="Identity Card"
	value=<?php echo $row['National_Id'];?>>
Telephone:<input type="text" name="phone"class="log9" placeholder="Telephone"
value=<?php echo $row['Telephone'];?>></td></tr>


<tr><td class="user">Conversation
	<textarea cols="20" rows="3" name="conv" ><?php echo $row['Conversation'];?></textarea>
<input type="file" name="photo"
value="
	<?php echo @$_POST['photo'];?>"class="log13">
</td></tr>

</table>
<input class="logina"type="submit"name="update"value="Update">
</form>




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
