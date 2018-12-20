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
$fname=$_REQUEST["first_name"];
$lname=$_REQUEST["last_name"];
$gndr=$_REQUEST["gender"];
$dob=$_REQUEST["DOB"];
$phone=$_REQUEST["mobile"];
$mailid=$_REQUEST["mail"];
$pass1=$_REQUEST["password1"];
$pass2=$_REQUEST["password2"];

if($fname=="" || $lname=="" || $gndr=="" || $dob=="" || $phone=="" || $mailid=="" || $pass1=="" || $pass2=="")
{
	echo"<script>alert('fill all the fields')</script>";
	echo"<a href=register.php>REGISTER Once Again</a>";
}  
else
{

	$echeck=explode('@',$mailid);
	if(count($echeck)!=2)
	{
		echo"<script>alert('WRONG EMAILID')</script>";
		echo"<a href=register1.php>REGISTER Once Again</a>";
	}

	else
	{
		$c=0;
		$q=pg_query("select * from register1");
		while($row=pg_fetch_array($q))
		{
			if($row['email']==$mailid)
			{
				echo"<script>alert('ID allready exits')</script>";
				$c=1;
			}
		}
			if($c==0)
		{
			pg_query("insert into register1 values('$fname','$lname','$gndr','$dob','$phone','$mailid','$pass1','$pass2')");
     		echo"<body bgcolor=#fff2e5>";
		    echo"<center>";
		 	echo"<h50><B>WELCOME REGISTRATION CONFIRMED...You Can Login Now....";
			echo"<form method=post action=home2c.php>";
			echo"<input type=submit value=LOGIN>";
			echo"</form>";
			echo"<form method=post action=home2c.php>";
			echo"<input type=submit value=HOME>";
			echo"</form>";
			echo"</body>";
		}
	}
}


?>
