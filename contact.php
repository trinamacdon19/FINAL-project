<!DOCTYPE html> 
<html> 
<head>
	<meta charset="utf-8"> 
	<meta name="referrer" content="origin-when-crossorigin" id="meta_referrer"> 	
	<title>Tourism Website</title> 
	<link rel="stylesheet" type="text/css" href="contact.css"> 
	<link rel="preconnect" href="https://fonts.googleapis.com"> 
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
	<link rel="preconnect" href="https://fonts.googleapis.com"> 
	<link href="./bottom.css" rel="stylesheet"> 

</head> 
<body> 
<?php include('index.php');?> 

<section id="contact"> 
	<h1>Contact Us</h1> 
	<form method="POST" action="contact.php" onsubmit="return validateForm()"> 
	<label for="name">Name:</label> 
	<input type="text" id="name" name="name" required> 
	<label for="email">Email:</label> 
	<input type="email" id="email" name="email" required> 
	<label for="message">Message:</label> 
	<textarea id="message" name="message" required></textarea> 
	<input type="submit" value="Send"> 
</form>
</section> 

<script> 
function validateForm() { 
	var name = document.getElementById("name").value; 
	var email = document.getElementById("email").value; 
	var message = document.getElementById("message").value; 

	if (name == "") { 
		alert("Name must be filled out"); 
		return false; 
	    }

	if (email == "") { 
		alert("Email must be filled out"); 
		return false; 
	    }

	if (message == "") { 
		alert("Message must be filled out"); 
		return false; 
	    }

// You can add additional validation checks for the email format and message length, etc. 

	return true; 
}
</script> 
</main> 
<?php include("bottom.php")?> 
</body> 
</html>