<!--<?php

//Echo "/" What goes around, comes around. It is true;"/";
Echo"\"What goes around, comes around. It is true;\"";
Printf("There are %d days in %s", date("t"), date("F"));

echo "<hr>";
$yes = array('this', 'is', 'an array');
echo is_array($yes) ? 'Array' : 'not an Array';
echo "\n";
echo "<hr>";
$no = 'this is a string';

echo is_array($no) ? 'Array' : 'not an Array';
echo "<hr>";
//$date=date("F d Y ");
$date=date("M,D,y");
//$time=date("h:i:s ");
print $date;
//print $time;
echo "<br>";
$check=checkdate(67,23,2015);
if($check==true){
print $check;
print "valid date";
}
else{
print $check;
print"invalid date";
}
echo "<hr>";
$pass=md5("hello");
echo $pass;

echo "<br>";
$first = 1;
    $second = 2;
    $n =10;
print $first.'<br>';
for($i=1;$i<=$n-1;$i++)
       {
       $final = $first + $second;
       $first = $second;
       $second = $final;
		print $final.'<br>';
       }

       echo "<hr>";
       for($i=0; $i<=5; $i++)
 {
	
	for ($j=0; $j<=5; $j++)
	{
		if ($j==0 or $j==5 or $j==$i)
			printf( "+");
		else
			print("-");
	}	
	
	printf( "<BR>");
 }	



$days=array(0=>'Monday',1=>'Tuesday',
	2=>'Wednesday',3=>'Thursday',4=>'Friday',
	5=>'Satarday',6=>'Sunday');
$j=1;
for($i=0;$i<=6;$i++){
echo $j.".&nbsp;";
echo $days[$i]."<br>";
$j++;
}

?>-->
<html><head>
<title>form page</title>
<script type="text/javascript" src ="jquery.js"></script>
</head>

<body>
</body>
<table>
<tr><td><label>Province:</label> </td><td><label>District:</label> </td><td><label>Sector :</label></td></tr>													
	</table>										<tr><?php include"test.php"; ?></tr>
</html>