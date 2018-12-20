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
    $e=$_SESSION['email3'];
    $n=$_SESSION['n3'];
    $d=$_SESSION['d3'];
    $p=$_SESSION['pid3'];
    $tamt=$_SESSION['tamt1'];
     $result=pg_query("select pid,place,ndays from packages where pid='$p'");
     while($r=pg_fetch_array($result))
     {
    $pid=$r['pid'];
    $place=$r['place'];
    $ndays=$r['ndays'];
	 }
	  $result1=pg_query("select fname,lastname,gender,mobilenumber,email from register1 where email='$e'");
     while($r1=pg_fetch_array($result1))
     {
     $fname=$r1['fname'];
     $lname=$r1['lastname'];
     $mob=$r1['mobilenumber'];
     $gender=$r1['gender'];
     $email=$r1['email'];
	}
	?>
<html>
<body>
  <h1>TRAVEL WORLD</h1>
    <tr>
  <h3><u>CUSTOMER DETAILS</u></h3>
  <h5>NAME:
    <?php
  echo"$fname $lname";
  ?>
  <h5>EMAIL:
    <?php
  echo"$e";
  ?>
  <h5>GENDER:
    <?php
  echo"$gender";
  ?>
    <h5>MOBILE NO.
    <?php
  echo"$mob";
  ?><br>
   <h3><u>BILL DETAILS</u></h3>
  <h5>PACKAGEID:
    <?php
  echo"$pid";
  ?>
  <h5>PLACE:
    <?php
  echo"$place";
  ?>
 <h5>NO F DAYS:
    <?php
  echo"$ndays";
  ?>
  <h5>NO OF PERSONS:
    <?php
  echo"$n";
  ?>
  <h5>DATE OF TRAVELLING:
    <?php
  echo"$d";
  ?>
  <h5>TOTAL AMOUNT:
    <?php
  echo"$tamt";
  ?></p><br>
   <input type="button"" value="Print" onClick="window.print()" />
   <center>
   </body>
   </html>
