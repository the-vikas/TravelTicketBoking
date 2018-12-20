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
			<li><a href=user.php>Back</a></li>
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
   $result=pg_query("select * from packages");
   echo"<table width=1200 height=178 align=center cellpadding=1 cellspacing=1 border=3  bordercolor= black>";
   echo"<tr><th>PID</th><th>PLACE</th><th>STAYCOST</th><th>FOODCOST</th><th>TRAVELCOST</th><th>NDAYS</th><th>TAMT</th></tr>";
   while($r=pg_fetch_array($result))
   {
   	echo"<tr><td>";
   	echo $r['pid'];
   	echo"</td><td>";
   	echo $r['place'];
   	echo"</td><td>";
   	echo $r['scost'];
   	echo"</td><td>";
   	echo $r['fcost'];
   	echo"</td><td>";
   	echo $r['tcost'];
   	echo"</td><td>";
   	echo $r['ndays'];
   	echo"</td><td>";
   	echo $r['tamt'];
   	echo"</tr></td>";
   	}
   	echo"</table>";
   	?>
   	</body>
   	</html>
