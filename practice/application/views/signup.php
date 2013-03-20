<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sign up</title>

	
</head>
<body>

<div id="container">
	<h1>Sign up</h1>
	
	<?php
	
	echo form_open('main/signup_validation');
	echo validation_errors();
	
		echo "<p>First Name: ";
		echo form_input('fname');
		echo "</p>";
		
		echo "<p>Middle Name: ";
		echo form_input('mname');
		echo "</p>";
		
		echo "<p>Last Name: ";
		echo form_input('lname');
		echo "</p>";
		
		echo "<p>Address: ";
		echo form_input('address');
		echo "</p>";
		
		echo "<p>Email: ";
		echo form_input('email');
		echo "</p>";
		
		echo "<p>Contact Number: ";
		echo form_input('contact');
		echo "</p>";
		
		echo "<p>Password: ";
		echo form_password('password');
		echo "</p>";
		
		echo "<p>Confirm Password: ";
		echo form_password('cpassword');
		echo "</p>";
		
		echo "<p>";
		echo form_submit('signup_submit','Sign up');
		echo "</p>";
	
	echo form_close();
	
	?>
	
</div>

</body>
</html>