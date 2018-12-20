<?php
$uname=$_POST["username"];
$pw=$_POST["password"];
	if($uname==omkarvikas && $pw==5354)
	{
	header("location:admin.php");
		/*echo"<body bgcolor=#fff2e5>";
        echo"<center>";
     	echo"<h50><B>welcome Admin...to continue as Admin click on CONTINUE otherwise HOME";
		echo"<form method=post action=admin.php>";
		echo"<input type=submit value=CONTINUE>";
		echo"</form>";
		echo"<form method=post action=home2c.php>";
		echo"<input type=submit value=HOME>";
		echo"</form>";
		echo"</body>";*/
		}
		else
		{
		echo "<script>alert('USER ID OR PASSWORD NOT VALID')</script>";
		echo"wrong Information....Try Again<a href='adminlogin.php'</a>";
		}
?>
