<link href="style.css" rel="stylesheet">
	<link href="transp1.css" rel="stylesheet">
<body>
<header>
<nav>
<h1>Travel World</h1>			
          <ul id="nav">
					<li><a href=home2c.php>Home</a></li>
						<li><a>|</a></li>
			<li><a href=aboutus.php>About us</a></li>
				<li><a>|</a></li>
			<li><a href=adminlogin.php>AdminLogin</a></li>
				<li><a>|</a></li>
			<li><a href=feedback.php>feedback</a></li>
					</ul>
					</nav>
					</header>
<form action="server1.php" method="post"><TR></tr>
  <table width="400" height="178" align="center" cellpadding="1"cellspacing="1" bgcolor="">
    <tr> 
      <td height="20" colspan="2" align="center"><h2><font color="white"><em><font face="Georgia, Times New Roman, Times, serif">Registration Form</font></em></font></h2></td>
    </tr>
    <tr> 
      <td width="170" height="40"  align="center"><h3><font color="black"><em><font face="Georgia, Times New Roman, Times, serif">First Name</font></em></font></h3></td>
      <td width="213"><font color="#7c0000">
         <input type="text" name="first_name" style="background" />
      </font></td>
    </tr>
     <tr> 
      <td width="170" height="40"  align="center"><h3><font color="black"><em><font face="Georgia, Times New Roman, Times, serif">Last Name</font></em></font></h3></td>
      <td width="213"><font color="#7c0000">
         <input type="text" name="last_name" style="background" />
      </font></td>
    </tr>
       <td width="170" height="40"  align="center"><h3><font color="black"><em><font face="Georgia, Times New Roman, Times, serif">Gender</font></em></font></h3></td><td width="213"><font color="#7c0000"><select name=gender>
	<option value=Male>Male</option>
	<option value=Female>Female</option>
	<option value=other>Other</option>
</select> </font></td><br>
 <tr> 
      <td width="170" height="40"  align="center"><h3><font color="black"><em><font face="Georgia, Times New Roman, Times, serif">Date Of Birth:</font></em></font></h3></td>
      <td width="213"><font color="#7c0000">
         <input type="date" name="DOB" style="background" />
      </font></td>
    </tr>
     <tr> 
      <td width="170" height="40"  align="center"><h3><font color="black"><em><font face="Georgia, Times New Roman, Times, serif">Mobile NO:</font></em></font></h3></td>
      <td width="213"><font color="#7c0000">
         <input type="int" maxlength=10 name="mobile" style="background" />
      </font></td>
    </tr>
     <tr> 
      <td width="170" height="40"  align="center"><h3><font color="black"><em><font face="Georgia, Times New Roman, Times, serif">EmailID</font></em></font></h3></td>
      <td width="213"><font color="#7c0000">
         <input type="email" name="mail" style="background" />
      </font></td>
    </tr>
     <tr> 
      <td width="170" height="40"  align="center"><h3><font color="black"><em><font face="Georgia, Times New Roman, Times, serif">New Password</font></em></font></h3></td>
      <td width="213"><font color="#7c0000">
         <input type="password" name="password1" style="background" />
      </font></td>
    </tr>
     <tr> 
      <td width="170" height="40"  align="center"><h3><font color="black"><em><font face="Georgia, Times New Roman, Times, serif">Confirm Password</font></em></font></h3></td>
      <td width="213"><font color="#7c0000">
         <input type="password" name="password2" style="background" />
      </font></td>
       </tr>
       <tr> 
      <td height="48" colspan="2" align="center"><font color="#7c0000">
        <input type="submit"  value="Submit">
  </TR>
    </table>
    </form>
    </body>
    </html>
