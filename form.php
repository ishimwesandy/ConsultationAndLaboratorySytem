
<?php
session_start();
if(!isset($_SESSION['username'])){
Header("location:loginpage.php?msg=please log in again");

}
include("db.php");
$message="";
if (isset($_POST['save'])){
$firstname=@$_POST['fname'];
$lastname=@$_POST['lname'];
$sex=@$_POST['sex'];
$lang=@$_POST['lang1']." ".@$_POST['lang2']." ".@$_POST['lang3']." ".@$_POST['lang4'];
$country=@$_POST['country'];
$phone=@$_POST['tel'];
$comment=@$_POST['comment'];
$error_fname="";
$phone_number="";

if( empty($firstname)or empty($lastname)or empty($sex)
	or empty($country)or empty($lang)or empty($comment)
	or empty($phone)){

	echo "You have an empty field ";
}
if(!preg_match("/^[A-Z]+$/",$firstname)){
	$error_fname="Invalid firstname,all in uppercase";

}
if(!preg_match("/^07[8,2,3]{1}[0-9]{7}+$/",$phone)){
	$phone_number="Invalid phone number";


}

else{
	//!preg_match("/^[]+", subject)

$sql1="SELECT *from registration where phone='$phone'";
$ex=mysql_query($sql1) or die(mysql_error());
if (mysql_num_rows($ex)==1) {
	
	$message="this record is available in the table";
}
if (mysql_num_rows($ex)==0) {
	
$sql="INSERT INTO registration SET 
firstname='$firstname',
lastname='$lastname',
sex='$sex',
lang='$lang',
country='$country',
phone='$phone',
comment='$comment',
Photo = '".$_FILES['upload']['name']."'" or die(mysql_error());
move_uploaded_file($_FILES['upload']['tmp_name'],"c:\\xampp\\htdocs\\function_exer\\gallery\\".$_FILES['upload']['name']);
$exec=mysql_query($sql);

$message="data inserted";
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
<TABLE align="center" bgcolor="lime">
<tr bgcolor="green"><td>
Welcome Mr &nbsp;

<?php
echo $_SESSION['username'];

?>
</td><td width="200" align="right"><blink><a href="logout.php"><img src="logout.png" width="80" height="20"></a></blink></td></tr>


<form method="POST" enctype="multipart/form-data">
<tr>
<td bgcolor="green"><font color="white">Firstname</td>
<td><input type="text" name="fname" value="
	<?php echo @$_POST['fname'];?>" >

<?php echo @$error_fname;?>

</td>
</tr>

<tr>
<td bgcolor="green"><font color="white">Lastname</td>
<td><input type="text" name="lname" value="
	<?php echo @$_POST['lname'];?>"></td>
</tr>

<tr>
<td bgcolor="green"><font color="white">sex</td>
<td>
<input type="radio" name="sex" value="male"
<?php echo @$_POST['sex']=="male"?"checked":"";?> >Male
<input type="radio" name="sex" value="female"
<?php echo @$_POST['sex']=="female"?"checked":"";?>

>Female

</td>
</tr>
<tr>
<td bgcolor="green"><font color="white">Languages</td>
<td>
<input type="checkbox"  name="lang1" value="kinyarwanda"
 <?php echo @$_POST['lang1']=="kinyarwanda"?"checked":"";?>>kinyarwanda
<input type="checkbox" name="lang2" value="english"
<?php echo @$_POST['lang2']=="english"?"checked":"";?>

>English
<input type="checkbox" name="lang3" value="french"
<?php echo @$_POST['lang3']=="french"?"checked":"";?>
>french
<input type="checkbox" name="lang4" value="swahilli"
<?php echo @$_POST['lang4']=="swahilli"?"checked":"";?>
>swahilli
</td>
</tr>
<tr>
<td bgcolor="green"><font color="white">country</td>
<td>
<select name="country" >
<option value="rwanda"
<?php echo @$_POST['country']=="rwanda"?"selected":""; ?>

>Rwanda</option>
<option value="uganda"
<?php echo @$_POST['country']=="uganda"?"selected":""; ?>

>uganda</option>

</select>

</td>
</tr>

<tr>
<td bgcolor="green"><font color="white">Phone</td>
<td><input type="text" name="tel"value="
	<?php echo @$_POST['tel'];?>"onkeyPress="return desableNum(event)"maxlength="10">
<?php echo @$phone_number;?></td>
</tr>

<tr>
<td bgcolor="green"><font color="white">Comment</td>
<td>
<textarea name="comment" cols="10" rows="10">
	<?php echo @$_POST['comment'];?>
</textarea>
</font>
</td>
</tr>
<tr>
	<td bgcolor="green">Photo</td>
	<td><input type="file" name="upload" value="brouse"></td>
</tr>

<tr bgcolor="green">
<td colspan="2" align="center">
	<input type="submit" name="save" value="Save">
</td>
</tr>

<tr><td colspan="2" align="center">

<?php
echo $message;
?>
<a href="records.php"> Display records</a><br><br>
<a href="user_new.php"> Add new user </a>
</td>
</tr>
</FORM>
</TABLE>