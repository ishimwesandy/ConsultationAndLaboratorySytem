
<?php 
session_start();
include("connect.php");
$id=$_SESSION['id'];
$sql="SELECT *from customer where customer_Id='$id' group by Telephone";
$exe=mysql_query($sql);
$res=mysql_fetch_array($exe);

if($res['Pregnacy']=='Positive' or $res['Pregnacy']=='Negative' ){


?>
<div align="center">
<script type="text/javascript">
function printpage(){
document.getElementById('printButton').style.visibility='hidden';
window.print();
document.getElementById('printButton').style.visibility='visible';

			}

</script>
<input type="button" value="PrintForm" id="printButton" onClick='printpage()'>
</div>
<table bgcolor="skyblue" align="center">
<tr>
<td colspan="2" bgcolor="green" align="center" width="100"><h1> Customer Card</h1></td></tr>
<tr>
<td colspan="2" align="right"><img src="./gallery/<?php echo $res['photo'];?>" width="100" height="100"></td>
</tr>
<tr><td>Firstname:</td><td><?php echo $res['Firstname']; ?></td></tr>
<tr><td>Lastname:</td><td><?php echo $res['Lastname']; ?></td></tr>
<tr><td>Gender:</td><td><?php echo $res['sex']; ?></td></tr>
</tr>
<tr><td>Date of Birth:</td><td><?php echo $res['date']; ?></td></tr>
<tr><td>Phone Number:</td><td><?php echo $res['Telephone']; ?></td></tr>
</tr>
</tr>
<tr><td>Identity Card:</td><td><?php echo $res['National_Id']; ?></td></tr>
</tr>

<tr><td>Pregnact Test:</td><td><?php echo $res['Pregnacy']; ?></td></tr>
</tr>

</tr>
</table>
<?php
}

elseif($res['blood_gr']=='O' or $res['blood_gr']=='A' or $res['blood_gr']=='B' or $res['blood_gr']=='AB'
	or $res['RH']=='Positive' or $res['RH']=='Negative'){


?>
<div align="center">
<script type="text/javascript">
function printpage(){
document.getElementById('printButton').style.visibility='hidden';
window.print();
document.getElementById('printButton').style.visibility='visible';

}

</script>
<input type="button" value="PrintForm" id="printButton" onClick='printpage()'>
</div>
<table bgcolor="skyblue" align="center">
<tr>
<td colspan="2" bgcolor="green" align="center" width="100"><h1> Customer Card</h1></td></tr>
<tr>
<td colspan="2" align="right"><img src="./gallery/<?php echo $res['photo'];?>" width="100" height="100"></td>
</tr>
<tr><td>Firstname:</td><td><?php echo $res['Firstname']; ?></td></tr>
<tr><td>Lastname:</td><td><?php echo $res['Lastname']; ?></td></tr>
<tr><td>Gender:</td><td><?php echo $res['sex']; ?></td></tr>
</tr>
<tr><td>Date of Birth:</td><td><?php echo $res['date']; ?></td></tr>
<tr><td>Phone Number:</td><td><?php echo $res['Telephone']; ?></td></tr>
</tr>
</tr>
<tr><td>Identity Card:</td><td><?php echo $res['National_Id']; ?></td></tr>
</tr>
<tr><td>Blood group:</td><td><?php echo $res['blood_gr']; ?></td></tr>
<tr><td>Rh:</td><td><?php echo $res['RH']; ?></td></tr>
</tr>

</tr>

</tr>



</table>



<?php
}

elseif($res['diabet']=='Hypoglyecerimie(Low)' or $res['diabet']=='Normal ' or $res['diabet']=='Diabet(High)'
 or $res['glucose']=='>70Mg/dl'or $res['glucose']=='70-120 Mg/dl' or $res['glucose']=='<120 Mg/dl'){


?>
<div align="center">
<script type="text/javascript">
function printpage(){
document.getElementById('printButton').style.visibility='hidden';
window.print();
document.getElementById('printButton').style.visibility='visible';

}

</script>
<input type="button" value="PrintForm" id="printButton" onClick='printpage()'>
</div>
<table bgcolor="skyblue" align="center">
<tr>
<td colspan="2" bgcolor="green" align="center" width="100"><h1> Customer Card</h1></td></tr>
<tr>
<td colspan="2" align="right"><img src="./gallery/<?php echo $res['photo'];?>" width="100" height="100"></td>
</tr>
<tr><td>Firstname:</td><td><?php echo $res['Firstname']; ?></td></tr>
<tr><td>Lastname:</td><td><?php echo $res['Lastname']; ?></td></tr>
<tr><td>Gender:</td><td><?php echo $res['sex']; ?></td></tr>
</tr>
<tr><td>Date of Birth:</td><td><?php echo $res['date']; ?></td></tr>
<tr><td>Phone Number:</td><td><?php echo $res['Telephone']; ?></td></tr>
</tr>
</tr>
<tr><td>Identity Card:</td><td><?php echo $res['National_Id']; ?></td></tr>
</tr>
<tr><td>Diabet Testing:</td><td><?php echo $res['diabet']; ?></td></tr>
<tr><td>Glucose:</td><td><?php echo $res['glucose']; ?></td></tr>
</tr>

</tr>

</tr>



</table>



<?php
}
else {

echo "No result Please Wait!! Doctor still in process";




}
?>