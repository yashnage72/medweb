<?php

session_start();
include('db.php');
$status = "";
if (isset($_POST['code']) && $_POST['code'] != "") {
	$code = $_POST['code'];
	$result = mysqli_query($con, "SELECT * FROM `products` WHERE `code`='$code'");
	$row = mysqli_fetch_assoc($result);
	$name = $row['name'];
	$code = $row['code'];
	$price = $row['price'];
	$image = $row['image'];

	$cartArray = array(
		$code => array(
			'name' => $name,
			'code' => $code,
			'price' => $price,
			'quantity' => 1,
			'image' => $image
		)
	);

	if (empty($_SESSION["shopping_cart"])) {
		$_SESSION["shopping_cart"] = $cartArray;
		$status = "<div class='box'>Product is added to your cart!</div>";
	} else {
		$array_keys = array_keys($_SESSION["shopping_cart"]);
		if (in_array($code, $array_keys)) {
			$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";
		} else {
			$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"], $cartArray);
			$status = "<div class='box'>Product is added to your cart!</div>";
		}
	}
}
?>
<html>

<head>
	<title>Shopping Cart</title>
	<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

</head>

<body>
	<div style="width:700px">

		<header>
			<div class="nav">
				<ul>
					<div>
						<div class="search-container">
							<form>
								<a href="../index.php"><img src="./product-images/logo.png" alt="ePharma"></a>
							</form>
						</div>
					</div>
					<div>
						<li><a href="../login/login.php"><i class="fa fa-sign-in fa-lg"></i> Login/Signup</a></li>
						<li><a href="../demo/index.php"><i class="fa fa-cart-plus fa-lg"></i> Cart</a></li>
						<li><a href="../medicine/contents.php"><i class="fa fa-medkit fa-lg"></i> Order Medicines</a></li>
						<li><a href="#"><i class="fa fa-info fa-lg"></i> Healthcare Products</a></li>


					</div>
				</ul>
			</div>
		</header>


		<h2 style='margin-left:50px; margin-bottom: 20px'>Shopping Cart</h2>

		<?php
		if (!empty($_SESSION["shopping_cart"])) {
			$cart_count = count(array_keys($_SESSION["shopping_cart"]));
		?>
			<div class="cart_div">
				<a href="cart.php"><img src="cart-icon.png" /> Cart<span><?php echo $cart_count; ?></span></a>
			</div>
		<?php
		}

		$result = mysqli_query($con, "SELECT * FROM `products`");
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<div class='product_wrapper'>
			  <form method='post' action=''>
			  <input type='hidden'  name='code' value=" . $row['code'] . " />
			  <div class='image'><img src='" . $row['image'] . "' /></div>
			  <div class='name'>" . $row['name'] . "</div>
		   	  <div class='price'>₹ " . $row['price'] . "</div>
			  <button type='submit' class='buy'>Buy Now</button>
			  </form>
		   	  </div>";
		}
		mysqli_close($con);
		?>

		<div style="clear:both;"></div>

		<div class="message_box" style="margin:10px 0px;">
			<?php echo $status; ?>
		</div>

		<br /><br />

	</div>
</body>

</html>