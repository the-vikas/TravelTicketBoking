<?php
 $host        = "host = 127.0.0.1";
   $port        = "port = 5432";
   $dbname      = "dbname = travel";
   $credentials = "user = postgres password=pass123";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
$name=$_REQUEST["name"];
$emailid=$_REQUEST["email"];
$subject=$_REQUEST["subject"];
$msg=$_REQUEST["msg"];


if($name=="" || $emailid=="" || $subject=="" || $msg=="")
{
	echo"<script>alert('fill all the fields')</script>";
	echo"<a href=register.php>Try Once Again</a>";
}  
else
{

	$echeck=explode('@',$emailid);
	if(count($echeck)!=2)
	{
		echo"<script>alert('WRONG EMAILID')</script>";
		echo"<a href=feedback.php>Try Once Again</a>";
	}

	else
	{
		$c=0;
		$q=pg_query("select * from register1");
		while($row=pg_fetch_array($q))
		{
			if($row['email']==$mailid)
			{
				pg_query("insert into feedback values('$name','$emailid','$subject','$msg')");
		 		echo"<body bgcolor=#fff2e5>";
				echo"<center>";
			 	echo"<h50><B>Feedback has been successfully sent....";
				echo"<form method=post action=home2c.php>";
				echo"<input type=submit value=HOME>";
				echo"</form>";
				$c=1;
			}
		}
			if($c==0)
			{
				
				echo"<script>alert('Email-Id does not match....')</script>";
				echo"<a href=feedback.php>Try Once Again</a>";
				
			}			
		}
	}


?>
