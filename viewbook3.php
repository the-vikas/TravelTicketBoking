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
			<li><a href=viewbookings.php>Back</a></li>
			        	<li><a></a></li>
			<li><a href=home2c.php>Logout</a></li> 
			            <li><a></a></li>
				</ul>
					</nav>
					</header>
				<ul>
				</body>
				</html>
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
   $pid=$_POST['pid'];
   $result=pg_query("select * from booking");
   echo"<table width=1200 height=178 align=center cellpadding=1 cellspacing=1 border=3  bordercolor= black>";
   echo"<tr><th>PID</th><th>EMAIL</th><th>NO OF PERSONS</th><th>DATE</th>";
   while($r=pg_fetch_array($result))
   {
   	echo"<tr><td>";
   	echo $r['pid'];
   	echo"</td><td>";
   	echo $r['email'];
   	echo"</td><td>";
   	echo $r['nop'];
   	echo"</td><td>";
   	echo $r['date'];
   	echo"</tr></td>";
   	}
   	echo"</table>";
   	?>
