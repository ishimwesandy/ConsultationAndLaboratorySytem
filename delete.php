<?php

include ('connect.php');

$id=$_GET['User_id'];
$sql="delete from user where User_id='$id'";
$exe=mysql_query($sql);
header("location: doctor_view.php");



?>