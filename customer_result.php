<?php
session_start();
if (!isset($_SESSION['fname'])) {
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
<li class="active"><a href="customer_result.php">Customer Profile</a></li>
	
	<li><a href="print_result.php" target="_blank">Customer Result </a></li>
		</ul>
	</div></li>
<li><a href="#"> send Comments</a>	</li>					
	<li><a href="logout.php">Logout</a></li>
	</ul>
	</div> 			

</tr>
<tr>

	<td colspan="6" id="td2" valign="top">
		<!--<div class="t">--><p class="t">Welcome To Consultation And Laboratory Management System</p><!--</div>-->
		<p class="name1">welcome</p> &nbsp;
		<?php
echo "<div id='name'>".$_SESSION['fname']."</div>";
?>
</td>
	</tr>	
<tr>
<td colspan="6" class="footer">&copy Reserved by Sandy</td>
</tr>
</table>
</div>
</body>
</html>
