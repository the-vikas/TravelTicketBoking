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
$email=$_REQUEST["email"];
pg_query("delete from register1 where email='$email'");
?>
<html>
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
			<li><a href=home2c.php>Logout</a></li> 
			            <li><a></a></li>
				</ul>
					</nav>
					</header>
				<ul>
<body>
 <tr> 
      <td height="41" colspan="2" align="center"><h2><font color="white"><em><font face="Georgia, Times New Roman, Times, serif">
      User Removed </font></em></font></h2></td>
    </tr>
  
    </body>
    </html>
