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
    $p=$_SESSION['pid1'];
    $e=$_SESSION['email1'];
    $n=$_SESSION['no1'];
    $d=$_SESSION['date1'];
    $_SESSION['pid2']=$p;
    $_SESSION['email2']=$e;
    $_SESSION['n2']=$n;
    $_SESSION['d2']=$d;
    
    $result=pg_query("select tamt from packages where pid='$p'");
     while($r=pg_fetch_array($result))
     {
    $a=$n*$r['tamt'];
	 }
	 $_SESSION['tamt']=$a;
	  $result1=pg_query("select fname,lastname,email from register1 where email='$e'");
     while($r1=pg_fetch_array($result1))
     {
     $fname=$r1['fname'];
     $lname=$r1['lastname'];
     $email=$r1['email'];
	}
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
			<li><a href=bookpackages.php>Back</a></li>
			        	<li><a></a></li>
			<li><a href=home2c.php>Logout</a></li> 
			            <li><a></a></li>
				</ul>
					</nav>
					</header>
				<ul>
<body><p align="left"><br><TR></tr>
<table width="400" height="178" align="" cellpadding="1"cellspacing="1" border="0"  bordercolor="black" bgcolor="">
    <tr> 
      <td height="41" colspan="2" align=""><h2><font color="red"><em><font face="Georgia, Times New Roman, Times, serif">Your booking</font></em></font></h2></td>
    </tr>
    <tr> 
    <td width="170" height="40"  align="center"><h3><font color="black"><em><font face="Georgia, Times New Roman, Times, serif">PACKAGE ID</font></em></font></h3></td>
      <td width="213"><font color="#7c0000">
         <?php echo"<h3><font color=black><em><font face=Georgia, Times New Roman, Times, serif>$p</font></em></font>";?>   </font></td>
       </font></td>
    </tr>
     <tr> 
    <td width="170" height="40"  align="center"><h3><font color="black"><em><font face="Georgia, Times New Roman, Times, serif">NAME:</font></em></font></h3></td>
      <td width="213"><font color="#7c0000">
        <?php echo"<h3><font color=black><em><font face=Georgia, Times New Roman, Times, serif>$fname $lname</font></em></font>";?>
       </font></td>
    </tr>
     <tr> 
    <td width="170" height="40"  align="center"><h3><font color="black"><em><font face="Georgia, Times New Roman, Times, serif">No Of Persons:</font></em></font></h3></td>
      <td width="213"><font color="#7c0000">
         <?php echo"<h3><font color=black><em><font face=Georgia, Times New Roman, Times, serif>$n</font></em></font>";?>
       </font></td>
       </font></td>
    </tr>
     <tr> 
    <td width="170" height="40"  align="center"><h3><font color="black"><em><font face="Georgia, Times New Roman, Times, serif">Date:</font></em></font></h3></td>
      <td width="213"><font color="#7c0000">
         <?php echo"<h3><font color=black><em><font face=Georgia, Times New Roman, Times, serif>$d</font></em></font>";?>
       </font></td>
       </font></td>
    </tr> <tr> 
    <td width="170" height="40"  align="center"><h3><font color="black"><em><font face="Georgia, Times New Roman, Times, serif">Total Amount:</font></em></font></h3></td>
      <td width="213"><font color="#7c0000">
         <?php echo"<h3><font color=black><em><font face=Georgia, Times New Roman, Times, serif>$a</font></em></font>";?>
       </font></td>
       </font></td>
    </tr>
		<div class="loginbox">
			<body>
	<div class="form">			
			<h2>Payments</h2>
			<form action=pay.php method="GET">
		<input type="text" id="name" placeholder="Cardholder's Name">
		<input type="text" class="input-quarter" placeholder="4242 4242 4242 4242 4242" maxlength="16">
		<input type="password" class="input-half" id="cvc" placeholder="CVV	" maxlength="3">
		<input type="text" class="input-quarter" id="exp-month" placeholder="MM" maxlength="2">
		<input type="text" class="input-half" id="exp-year" placeholder="YYYY" maxlength="4">
		<input type="text" class="input-quarter" placeholder="amount">
		<input type="submit" value="PAy">PAy!</form>
	</div>
				</body>
				</html>
				
