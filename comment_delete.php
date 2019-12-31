<?php

include ('connect.php');

$id=$_GET['Id_comment'];
$sql="delete from comment where Id_comment='$id'";
$exe=mysql_query($sql);
header("location: comment_view.php");



?>