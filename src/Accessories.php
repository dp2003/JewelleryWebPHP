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
div.polaroid {
  float: left;
  padding: 10px 10px 25px 10px;
  width: 450px;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 50px;
  margin-right: 50px;
}
div.container {
  text-align: center;
  padding: 10px 20px;
}
</style>
	<title>Shopping Cart</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="topnav">
  		<a class="active" href="HomePage.php">Home</a>
  		<a href="Accessories.php">Accessories</a>
  		<a href="Contact.php">Contact</a>
  		<a href="About.php">About</a>
   </div>
   <h1></h1>

      <a href="bags.php" style="color:#3c3c3c">
      <div class="polaroid">
        <img src="AM_Leather_bag_navigation_915x.jpg" style="width:100%">
        <div class="container">
          <p>Bags</p>
        </div>
      </div>
    </a>

      <a href="jewellery.php" style="color:#3c3c3c">
      <div class="polaroid">
        <img src="how-to-organize-jewelry.jpg"  style="width:100%">
        <div class="container">
          <p>Jewellery</p>
        </div>
      </div>
      </a>
      <a href="Glasses.php" style="color:#3c3c3c">
      <div class="polaroid">
        <img src="square-cg-cwm-tg__2000.jpg"  style="width:100%">
        <div class="container">
          <p>Sun Glasses</p>
        </div>
      </div>
      </a>
</body>
</html>



