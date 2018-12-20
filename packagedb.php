<?php
 $host        = "host = 127.0.0.1";
   $port        = "port = 5432";
   $dbname      = "dbname = travel";
   $credentials = "user = postgres password=pass123";

   $db = pg_connect( "$host $port $dbname $credentials"  );
 /* if(!$db) 
   {
      echo "Error : Unable to open database\n";
   } 
   else 
   {
      echo "Opened database successfully\n";
   }
 */
$pid=$_REQUEST["pid"];
$place=$_REQUEST["place"];
$scost=$_REQUEST["scost"];
$fcost=$_REQUEST["fcost"];
$tcost=$_REQUEST["tcost"];
$ndays=$_REQUEST["ndays"];
$tamt=$_REQUEST["tamt"];
if($pid==" " || $place==" " || $scost==" " || $fcost==" " || $tcost==" " || $ndays==" " || $tamt==" ")
{
	echo"<script>alert('Add all the fields')</script>";
	echo"<a href=addpackages.php>ADD Once Again</a>";
}  
else
	{
			pg_query("insert into packages values('$pid','$place','$fcost','$scost','$tcost','$ndays','$tamt')");
     		echo"<body bgcolor=#fff2e5>";
		    echo"<center>";
		 	echo"<h50><B>PACKAGE ADDED SUCCESSFULY....";
			echo"<form method=post action=admin.php>";
			echo"<input type=submit value=BACK>";
			echo"</form>";
			echo"<form method=post action=home2c.php>";
			echo"<input type=submit value=HOME>";
			echo"</form>";
			echo"</body>";
	}
	
	?>
