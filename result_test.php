<?php
session_start();
if (!isset($_SESSION['username'])) {
header("location:index.php?msg= u must login first");
}
?>
<?php
include ("connect.php");
$id=$_GET['Customer_Id'];
$sql="SELECT *from customer where Customer_Id='$id'";
$exer=mysql_query($sql);
$result=mysql_fetch_array($exer);

if(isset($_POST['login'])){
	$goup=@$_POST['group'];
	$rh=@$_POST['rh'];
	$preg=@$_POST['pregnacy'];
	$gl=@$_POST['gl'];
	$tes=@$_POST['precy'];
	
	$id=$_GET['Customer_Id'];
$upd="UPDATE customer set blood_gr='$goup',RH='$rh',Pregnacy='$preg',diabet='$tes',glucose='$gl' 
where Customer_Id='$id'";
$exe=mysql_query($upd);

 header("location:customer_view.php");

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
	<li><a href="#">View Comment </a></li>


		</ul>
	</div>
	</li>	
	<li><a href="customer_view.php">View Customer</a></li>

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
		<div class="titlea">Result of Customers</div>

		<form action=""method="POST">
		<table border="0" id="taba">

<tr><td><div class="user">Firstname</div></td><td><input type="text" name="fname"class="log"
	value="<?php echo @$result['Firstname'];?>" readonly="readonly"></td></tr>
<tr><td><div class="user">Lastname</div></td><td><input type="text" name="lname"class="log"
	value="<?php echo @$result['Lastname'];?>" readonly="readonly"></td></tr>
<tr><td><div class="user">Gender</div></td>
	<td>
Male<input type="radio" name="gender" value="male"
<?php echo @$result['sex']=="male"||@$_POST['gender']=="male"?"checked":""; ?>>
Female<input type="radio" name="gender" value="female"
<?php echo @$result['sex']=="female"||@$_POST['gender']=="female"?"checked":""; ?>>


<tr><td><div class="user">Diabet Testing</div></td><td>
<select name="precy">
	<option value=""> Choose result</option>
	<option value="Hypoglyecerimie(Low)" <?php echo $result['diabet']=='Hypoglyecerimie(Low)'?"selected":"";?>> Hypoglyecerimie(Low)</option>
<option value="Normal" <?php echo $result['diabet']=='Normal'?"selected":"";?>> Normal</option>
<option value="Diabet(High)" <?php echo $result['diabet']=='Diabet(High)'?"selected":"";?>>Diabet(High) </option>

</select>
	</td></tr>
	<tr><td><div class="user">Glucose</div></td><td>
<select name="gl">
	<option value=""> Choose result</option>
	<option value=">70Mg/dl" <?php echo $result['glucose']=='70Mg/dl'?"selected":"";?>> >70Mg/dl</option>
<option value="70-120 Mg/dl" <?php echo $result['glucose']=='70-120 Mg/dl'?"selected":"";?>> 70-120 Mg/dl</option>
<option value="<120 Mg/dl" <?php echo $result['glucose']=='<120 Mg/dl'?"selected":"";?>> <120 Mg/dl </option>

</select>
	</td></tr>
<tr><td><div class="user">Pregnacy Test</div></td><td>
	<select name="pregnacy">
		<option value=""> Choose result</option>
<option value="Positive" <?php echo $result['Pregnacy']=='Positive'?"selected":"";?>> Positive</option>
<option value="Negative" <?php echo $result['Pregnacy']=='Negative'?"selected":"";?>>Negative </option>

</select>


<tr><td><div class="user">RH</div></td><td>
<select name="rh">
	<option value=""> Choose result</option>
<option value="Positive"<?php echo $result['RH']=='Positive'?"selected":"";?>>Positive</option>
<option value="Negative" <?php echo $result['RH']=='Negative'?"selected":"";?>>Negative</option>

</select>

</td></tr>

<tr><td><div class="user">Group</div></td><td>
<select name="group">
	<option value=""> Choose result</option>
<option value="O" <?php echo $result['blood_gr']=='O'?"selected":"";?>>O</option>
<option value="AB" <?php echo $result['blood_gr']=='AB'?"selected":"";?>>AB</option>
<option value="A" <?php echo $result['blood_gr']=='A'?"selected":"";?>>A</option>
<option value="B" <?php echo $result['blood_gr']=='B'?"selected":"";?>>B</option>
</select>

</td></tr>


</table>
<input class="logina"type="submit"name="login"value="Give result">
</form>
<!-- image slided<img src="image.gif" class="slide3">-->
</tr>
<tr><td>     </td></tr>



<tr>
<td colspan="6" class="footer">&copy Reserved by Sandy</td>
</tr>
</table>
</div>
</body>
</html>


