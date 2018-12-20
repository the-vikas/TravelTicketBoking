<html>
	<link href="feedback.css" rel="stylesheet" >
	<body>
		<header>
			<nav>
				<h1>Travel World</h1>			
        		  <ul id="nav">
					<li><a href=home2c.php>Home</a></li>
						<li><a>|</a></li>
					<li><a href=aboutus.php>About us</a></li>
						<li><a>|</a></li>
					<li><a href='adminlogin.php'>AdminLogin</a></li>
						<li><a>|</a></li>
					<li><a href=register1.php>Registration</a></li>
						<li><a>|</a></li>
					<li><a href=feedback.php>Feedback</a></li>
				</ul>
			</nav>
		</header>
	
	
	
	
		<form action="feedback1.php" method="post"><TR></tr>
		
			<div class="feedback"><div class="feedback-default">
				<table border="0">
					<tr>
	 					<td colspan="2">
	  						<h2><center>Feedback Form</center></h2>
	 					</td>
					</tr>
					<tr>
	 					<td valign="top">
	 						 <label for="Name">Name</lebel>
	 					</td>
	 					<td valign="top">
	  						<input class="feedback_text" type="text" name="name" maxlength="15" />
	 					</td>
					</tr>
					<tr>
	 					<td valign="top">
	  						<label for="Email">Email</label>
	 					</td>
	 					<td valign="top">
	  						<input class="feedback_textbig" type="text" name="email" maxlength="35" />
	 					</td>
					</tr>
					<tr>
	 					<td valign="top">
	  						<label for="Subject">Subject</label>
	 					</td>
	 					<td valign="top">
	  						<input class="feedback_text" type="text" name="subject" value="General Feedback" maxlength="15" />
	 					</td>
					</tr>
					<tr>
	 					<td valign="top">
	  						<label for="Message">Message</label>
	 					</td>
	 					<td valign="top">
	  						<textarea class="feedback_textarea" name="msg" maxlength="300" /></textarea>
	  						<br />
						 </td>
					</tr>
					<tr>
						 <td colspan="2" style="text-align:center" >
						 	 <div class="antispammessage">
		  						To help prevent automated spam, please answer this question
		 						 <br /><br />
			  					<div class="antispamquestion">
				  					 Using only numbers, what is 8 plus 2? &nbsp; 
								   <input type="text" maxlength="3" style="width:40px">
							  	</div>
						  	</div>
						 </td>
					</tr>
					<tr>
						 <td colspan="2" align="center">
						 	  <br /><br />
					 		 	 <input type="submit" value="Submit Feedback" class="feedback_button" />
					 		  <br /><br />
	  						 <div style="font-size:0.9em">
	  						 	<a href="feedback.php">Feedback Form</a> provided by <b>Travel World</b>
	  						 </div>
	  							<br /><br />
						 </td>
					</tr>
				</table>
			</div></div></id>
		</form>
	</body>
</html>
