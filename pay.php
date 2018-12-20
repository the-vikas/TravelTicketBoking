<?php
session_start();
$host        = "host = 127.0.0.1";
   $port        = "port = 5432";
   $dbname      = "dbname = travel";
   $credentials = "user = postgres password=pass123";

   $db = pg_connect( "$host $port $dbname $credentials"  );
 /* if(!$db) 
  {
     echo "Error : Unable to open database\n";
   } else 
   {
      echo "Opened database successfully<br>";
   }
*/
    $e=$_SESSION['email2'];
    $n=$_SESSION['n2'];
    $d=$_SESSION['d2'];
    $p=$_SESSION['pid2'];
    $tamt= $_SESSION['tamt'];
    $_SESSION['email3']=$e;
    $_SESSION['n3']=$n;
    $_SESSION['d3']=$d;
    $_SESSION['pid3']=$p;
     $_SESSION['tamt1']=$tamt;
    pg_query("insert into booking values('$p','$e','$n','$d')");
    ?>
  <html>
	<head>
			<link href="ss.css" rel="stylesheet">
	</head>
	<html><link href="style.css" rel="stylesheet" >
	<body>
	<header>
<nav>
<h1>Travel World</h1>			
          <ul id="nav">
					<li><a href=home2c.php>Home</a></li>
						<li><a></a></li>
			<li><a href=user.php>Back</a></li>
			        	<li><a></a></li>
			<li><a href=home2c.php>Logout</a></li> 
			            <li><a></a></li>
				</ul>
					</nav>
					</header>
				<ul>
    <tr> 
    <td width="170" height="40"  align="center"><h3><font color="white"><em><font face="Georgia, Times New Roman, Times, serif"><I>THANK YOU YOUR BOOKING IS CONFIRMED</I></font></em></font></h3></td>
     <form action=p.php method=GET><input type=submit value=print-bill></form>
     </body>
     </html>
				
