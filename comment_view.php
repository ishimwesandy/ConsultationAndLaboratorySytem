
<html>
<head>
<title>Customer</title>
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
<li class="active"><a href="customer.php">Profile</a></li>
<li class="active"><a href="print_result.php" target="_blank">View Result</a></li>
<li><a href="customer_comment.php"> Send Comments</a>
	</li>					
	<li><a href="logout.php">Logout</a></li>
	</ul>
	</div> 			

</tr>
<tr>

	<td colspan="6" id="td2" valign="top">
		<!--<div class="t">--><p class="t">Welcome To Consultation And Laboratory Management System</p><!--</div>-->
		<div class="titlec">View Comment </div>

<?php
include('connect.php');
$sql="SELECT *from comment";
$query=mysql_query($sql);
?>

<table border="1" class="tab12" align="center">
<tr>
<td class="bg" >Number</font></td>
<td class="bg" >Email</font></td>
<td class="bg">Comment</td>


<td class="bg" colspan="2">Operation</td>
</tr>
<?php
while($row=mysql_fetch_array($query)){	
?>

<tr>
<td><?php echo $row['Id_comment'];?></td>
<td><?php echo $row['Email'];?></td>
<td><?php echo $row['Comment'];?></td>
<td > <a href="comment_delete.php? Id_comment=<?php echo $row['Id_comment'];?>"> <div class="delete">Delete</div> </a></td>
<?php

}
?>
</table>
</td>
</tr>
<tr>
<td colspan="6" class="footer">&copy Reserved by Sandy</td>
</tr>
</table>
</div>
</body>
</html>

