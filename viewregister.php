<html>
<head>
<link href="table.css" rel="stylesheet">
</head>
<link href="style.css" rel="stylesheet" >
	<body>
	<header>
<nav>
<h1>Travel World</h1>			
          <ul id="nav">
					<li><a href=home2c.php>Home</a></li>
						<li><a></a></li>
			<li><a href=admin.php>Back</a></li>
			        	<li><a></a></li>
			        	<li><a href=removeuser.php>Remove-User</a></li> 
			            <li><a></a></li>
			<li><a href=home2c.php>Logout</a></li> 
			            <li><a></a></li>
				</ul>
					</nav>
					</header>
				<ul>
<body bgcolor=><p align="center">
<?php
 $host        = "host = 127.0.0.1";
   $port        = "port = 5432";
   $dbname      = "dbname = travel";
   $credentials = "user = postgres password=pass123";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   /*if(!$db) 
   {
      echo "Error : Unable to open database\n";
   } 
   else 
   {
      echo "Opened database successfully\n";
   }*/
   $result=pg_query("select fname,lastname,gender,dob,mobilenumber,email from register1");
     echo"<table width=1200 height=178 align=center cellpadding=1 cellspacing=1 border=3  bordercolor= black>";
   echo"<tr><th>NAME</th><th>SURNAME</th><th>GENDER</th><th>DOB</th><th>MOBILE NO.</th><th>EMAILID</th></tr>";
   while($r=pg_fetch_array($result))
   {
   	echo"<tr><td>";
   	echo $r['fname'];
   	echo"</td><td>";
   	echo $r['lastname'];
   	echo"</td><td>";
   	echo $r['gender'];
   	echo"</td><td>";
   	echo $r['dob'];
   	echo"</td><td>";
   	echo $r['mobilenumber'];
   	echo"</td><td>";
   	echo $r['email'];
   	echo"</tr></td>";
   	}
   	echo"</table>";
   	?>
   	</body>
   	</html>
