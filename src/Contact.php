<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family:Courier New;
}

.topnav {
  overflow: hidden;
  background-color: #000000;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color:#000000;
  color: white;
}
</style>
	<title>Shopping Cart</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta http-equiv="Content-Type" content="text/html" />
</head>
<body>
	<div class="topnav"  >
  		<a class="active" href="HomePage.php">Home</a>
  		<a href="Accessories.php">Accessories</a>
  		<a href="Contact.php">Contact</a>
  		<a href="About.php">About</a>
   </div>

  <h3 style="font-family:Gabriola"> <b>Got any Questions? We are here to Help!!</b></h3>
<form method="post" action="Contact.php">
<p>
<label for="Name">Name: </label>
<input type="text" name="txtName" id="txtName">
</p>
<p>
<label for="email">Email: </label>
<input type="text" name="txtEmail" id="txtEmail">
</p>
<p>
<label for="phone">Phone: </label>
<input type="text" name="txtPhone" id="txtPhone">
</p>
<p>
<label for="message">Message: </label>
<textarea name="txtMessage" id="txtMessage"></textarea>
</p>
<p>&nbsp;</p>
<p>
<input type="submit" name="Submit" id="Submit" value="Send">
</p>
</form>
<?php


?>
</body>
</html>
