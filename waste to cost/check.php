<html>
<head>
<title> WASTE TO COST </title>
</head>
<body>
<?php
	$con=mysql_connect("localhost","root","");
	mysql_selectdb("udb",$con);
	$name=$_POST['una'];
	$password=$_POST['pa'];
	$x=mysql_query("select * from ut");
	while($r=mysql_fetch_array($x))
	{
		$na=$r['name'];
		$pw=$r['password'];
		if($name==$na)
		{
			if($password==$pw)
			{
				$f=1;
			}
		}
		else
			$f=2;
		
	}
		if($f==1)
			echo"<center><h1>LOGIN SUCCESS</h1></center>";
		else
			echo"LOGIN FAILED";
	mysql_close($con);
?>
</body>
<a href="index.html">BACK</a>
</html>
