<?php
session_start();

$connect = mysqli_connect("localhost","root","","miniproject");

if(isset($_POST['add_to_cart'])){

	if(isset($_SESSION['cart'])){
		$session_array_id = array_column($_SESSION['cart'],"id");


		if(!in_array($_GET['id'], $session_array_id)){

			$session_array = array(
			'id' => $_GET['id'],
			"name" => $_POST['name'],
			"price" => $_POST['price'],
			"quantity" => $_POST['quantity']
		);
		$_SESSION['cart'][] = $session_array;

		}

	}else{
		$session_array = array(
			'id' => $_GET['id'],
			"name" => $_POST['name'],
			"price" => $_POST['price'],
			"quantity" => $_POST['quantity']
		);
		$_SESSION['cart'][] = $session_array;
	}
}

?>
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
</head>
<body>
	<div class="topnav">
  		<a class="active" href="HomePage.php">Home</a>
  		<a href="Accessories.php">Accessories</a>
  		<a href="Contact.php">Contact</a>
  		<a href="About.php">About</a>
   </div>
	<div class="container-fluid">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
					<h2 class="text-center">Products</h2>
					<div class="col-md-12">
						<div class= "row">

					<?php
					$query = "SELECT * FROM shoppingcart";
					$result = mysqli_query($connect,$query);

					while($row = mysqli_fetch_array($result)) {?>
 
					<div class="col-md-4">
						<form method="post" action="bags.php?id=<?=$row['id']?>">
							<img src="img/<?= $row['image'] ?>" style='height: 150px;'>
							<h5 class="text-center"><?= $row['name']; ?></h5>
							<h5 class="text-center">$<?= number_format($row['price'],2);?></h5>
							<input type="hidden" name="name" value ="<?= $row['name'] ?>" >
							<input type="hidden" name="price" value ="<?= $row['price'] ?>" >
							<input type="number" name="quantity" value="1" class="form-control">
							<input type="submit" name = "add_to_cart" class="btn btn-warning btn-block my-2" value= "Add to Cart">
						</form>
					</div>

					<?php }

					?>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<h2 class= "text-center">Item Selected</h2>
					<?php 

					$total = 0;
					
					$output = "";

					$output .= "

					<table class='table table-bordered table-striped'>
					<tr>
					<th>ID</th>
					<th>Item Name</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Total Price</th>
					<th>Action</th>
					<tr>

					";

					if(!empty($_SESSION['cart'])){

						foreach($_SESSION['cart'] as $key => $value){

							$output.="
							<tr>
							<td>".$value['id']."</td>
							<td>".$value['name']."</td>
							<td>".$value['price']."</td>
							<td>".$value['quantity']."</td>
							<td>".number_format($value['price']*$value['quantity'],2)."</td>
							<td><a href= 'bags.php?action=remove&id=".$value['id']."'>
							<button class = 'btn btn-danger btn-block'>Remove</button>
							</a>
							</td>
							";

							$total = $total + $value['quantity']= $value['price'];
						

						}

						$output .="
						<tr>
						<td colspan=3></td>
						<td></b>Total Price</b></td>
						<td>".number_format($total,2)."</td>
						<td>
						<a href = 'bags.php?action=clearall'>
						<button class='btn btn-warning btn-block'>Clear</button>
						</a>
						</td>
						</tr>
						<tr>
						<td colspan=6>

						<a href = 'login.php'>
						<button class='btn btn-warning btn-block'>Invoice</button>
						</a>

						</td>
						</tr>
						";
						$total;  
					}
					$_SESSION["t"]= $total;
					echo $output;
					?>
				</div>
			</div>
		</div>
	</div>

	<?php

	if(isset($_GET['action'])){
		if($_GET['action']== "clearall"){
			unset($_SESSION['cart']);
		}

		if($_GET['action']=="remove"){

			foreach ($_SESSION['cart'] as $key => $value) {
				if($value['id'] == $_GET['id']){
					unset($_SESSION['cart'][$key]);
				}
			}
		}
	}
	?>

</body>
</html>