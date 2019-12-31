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
<li ><a href="doctor.php"class="active">Customer</a>
<div id="sub-menu">
	<ul class="ul1">
	<li><a href="add_customer.php">Add Customer</a></li>
	<li><a href="customer_view.php">Give Result </a></li>
	<li><a href="resulted.php">  Result Customer  </a></li>

		</ul>
	</div></li>
<li><a href="#"> Comments</a>
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
		<p class="name1">welcome</p> &nbsp;
		<?php


echo "<div id='name'>".$_SESSION['username']."</div>";
?>
<div style="font-weight:bold;"><u><h2>Instructions:</h2></u>
	<ul>
	<li>When you are going to register a new Customer you must check that already has an ID_CARD in order to use its number 
	as his/her identification number in our system, if not generate for him/her a unique identification number which is not exists. </li>
	<br>
	<li>After to register a new Customer you must explain for him/her that she/he will use his/her ID_CARD number or any generated number 
	when he is going to check for result.</li><br>
	<li>When you meet with any problem in your work you can contact your administrator in order to get help, for what you don't know or 
	you confuse.</li>
	<li>You must change the password and the username that were given to you.</li>
</ul>
	</div>
</dt>
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

 if(empty($Username) or empty($Password) or empty($Usertype) or empty($Firstname) 
 	or empty($Lastname) or empty($Email) or empty($Telephone) or empty($Identity)){


echo "<div class='pl'>Please Fill Well All Your Field</div>";}
elseif(preg_match("/^[a-zA-Z]\w+(\.\w+)*\@\w+(\.[0-9a-zA-Z]+)*\.[a-zA-Z]{2,4}$/", $_POST["email"]) === 0)
								{
								echo"<div class='pl'>Invalid Email</div>";							
}else{
mysql_query("INSERT INTO user values(null,'$Username','$Password','$Usertype','$Firstname',
	'$Lastname','$Email','$Telephone','$Identity')");
#mysql_query("INSERT INTO user SET USername='$Username',Pssword='$Password','$Usertype','$Firstname',
	#'$Lastname','$Email','$Telephone','$Identity')");

 echo"<div class='pl'>The user Has Been Inserted</div>";}
}
?>