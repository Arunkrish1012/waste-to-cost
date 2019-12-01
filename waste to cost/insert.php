<html>
<head>
<title> WASTE TO COST</title>
</head>
<body background="kholi.jpg">
<?php
	$con=mysql_connect("localhost","root","");
	$na=$_POST["na"];
	$gen=$_POST["gen"];
	$d=$_POST["d"];
	$m=$_POST["m"];
	$y=$_POST["y"];
	$date="$d/$m/$y";
	
	$em=$_POST["em"];
	$pw=$_POST["pw"];
	mysql_selectdb("udb",$con);
	if(mysql_query("INSERT INTO ut values('$na','$gen','$date','$em','$pw')",$con))
		echo"<h1><center> THANKYOU </center> </h1>";
	else
		echo"VALUES NOT INSERTED".mysql_error();
	mysql_close($con);
?>
</body>
<a href="index.html">BACK</a>
</html>

