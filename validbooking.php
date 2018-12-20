<?php
session_start();
 $host        = "host = 127.0.0.1";
   $port        = "port = 5432";
   $dbname      = "dbname = travel";
   $credentials = "user = postgres password=pass123";

/*   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }*/
$pid=$_REQUEST["pid"];
$email=$_REQUEST["email"];
$no=$_REQUEST["no"];
$date=$_REQUEST["date"];
$_SESSION['pid1']=$_REQUEST["pid"];
$_SESSION['email1']=$_REQUEST["email"];
$_SESSION['no1']=$_REQUEST["no"];
$_SESSION['date1']=$_REQUEST["date"];


/*if($pid=="" || $email=="" || $no=="" || $date=="")
{
	echo"<script>alert('fill all the fields')</script>";
	echo"<a href=bookpackages.php>Book Once Again</a>";
}  
else
{
		pg_query("insert into booking values('$pid','$email','$no','$date')");*/
     	header("location:bill.php");
     		echo"<body bgcolor=#fff2e5>";
		    echo"<center>";
		 	echo"<h50><B>View bill";
			echo"<form method=post action=bill.php>";
			echo"<input type=submit value=View>";
			echo"</form>";
			echo"<form method=post action=home2c.php>";
			echo"<input type=submit value=Cancel>";
			echo"</form>";
			echo"</body>";
		
?>
