<?php
session_start();
$host        = "host = 127.0.0.1";
   $port        = "port = 5432";
   $dbname      = "dbname = travel";
   $credentials = "user = postgres password=pass123";

   $db = pg_connect( "$host $port $dbname $credentials"  );
  /* if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully<br>";
   }
   */
	$id=$_POST["username"];
   // $_SESSION['usrnm']=$_POST["usrname"];
	$pass=$_POST["password"];
	$p=pg_query("select * from register1");
	$n=0;
	while($row=pg_fetch_array($p))
	{
		if($row["email"]==$id && $row["password2"]==$pass)
		{
			$n=1;
		}
	}
		if($n==1)
	{
		header("location:user.php");
		/*echo "<b><h50>Hey WElCOME</h50><h51>".$row['fname']."</h51><br><h40>...Successfully Loged In....</h40></b><br>";
		echo"<body bgcolor=#fff2e5>";
        echo"<center>";
     	echo"<h50><B>To continue click on the CONTINUE otherwise HOME";
		echo"<form method=post action=user.php>";
		echo"<input type=submit value=CONTINUE>";
		echo"</form>";
		echo"<form method=post action=home2c.php>";
		echo"<input type=submit value=HOME>";
		echo"</form>";
		echo"</body>";
	*/}
	else
	{
		echo "<script>alert('USER ID OR PASSWORD NOT VALID')</script>";
		echo "<center>";
		header("location:home2c.php");
	//	echo "<a href=home2c.php>Re-Enter Username And Password</a>";
		echo "<center>";
	}
   
?>

