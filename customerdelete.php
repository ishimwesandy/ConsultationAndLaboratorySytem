<?php

include ('connect.php');

$id=$_GET['Customer_Id'];
$sql="DELETE from customer where Customer_Id='$id'";
$exe=mysql_query($sql);
header("location: customer_v.php");



?>