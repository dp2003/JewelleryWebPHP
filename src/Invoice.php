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
table.center {
  margin-left: auto; 
  margin-right: auto;
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
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

  <?php 

  session_start();
  ?>
  <h1></h1>
  <h1></h1>
  <center><h2>INVOICE</h2></center>
  <table class='center' style="width:50%">
       <tr>
          <th>Amount</th>
        </tr>
        <tr>
          <td>
             $<?php echo $_SESSION["t"]; ?>
          </td>
        </tr>
        <tr>
          <td>
             $<?php echo $_SESSION["g"]; ?>
          </td>
        </tr>
        <tr>
          <td>
             $<?php echo $_SESSION["j"]; ?>
          </td>
        </tr>
        <tr>
          <th>
             Total Price :$<?php echo $_SESSION["t"]+$_SESSION["g"]+$_SESSION["j"];?>
            <a href = 'Thankyou.php'>
            <button class='btn btn-warning btn-danger'>PAY</button>
            </a>
          </th>
        </tr>
        
  </table>
</body>
</html>