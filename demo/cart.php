<?php

session_start();
$status = "";
if (isset($_POST['action']) && $_POST['action'] == "remove") {
	if (!empty($_SESSION["shopping_cart"])) {
		foreach ($_SESSION["shopping_cart"] as $key => $value) {
			if ($_POST["code"] == $key) {
				unset($_SESSION["shopping_cart"][$key]);
				$status = "<div class='box' style='color:red;'>
		Product is removed from your cart!</div>";
			}
			if (empty($_SESSION["shopping_cart"]))
				unset($_SESSION["shopping_cart"]);
		}
	}
}

if (isset($_POST['action']) && $_POST['action'] == "change") {
	foreach ($_SESSION["shopping_cart"] as &$value) {
		if ($value['code'] === $_POST["code"]) {
			$value['quantity'] = $_POST["quantity"];
			break; // Stop the loop after we've found the product
		}
	}
}
?>
<html>

<head>
	<title>Shopping Cart </title>
	<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>

<body>
	<div style="width:700px;">

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
				<a href="cart.php">
					<img src="cart-icon.png" /> Cart
					<span><?php echo $cart_count; ?></span></a>
			</div>
		<?php
		}
		?>

		<div class="cart">
			<?php
			if (isset($_SESSION["shopping_cart"])) {
				$total_price = 0;
			?>
				<table class="table">
					<tbody>
						<tr>
							<td></td>
							<td>ITEM NAME</td>
							<td>QUANTITY</td>
							<td>UNIT PRICE</td>
							<td>ITEMS TOTAL</td>
						</tr>
						<?php
						foreach ($_SESSION["shopping_cart"] as $product) {
						?>
							<tr>
								<td><img src='<?php echo $product["image"]; ?>' width="50" height="40" /></td>
								<td><?php echo $product["name"]; ?><br />
									<form method='post' action=''>
										<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
										<input type='hidden' name='action' value="remove" />
										<button type='submit' class='remove'>Remove Item</button>
									</form>
								</td>
								<td>
									<form method='post' action=''>
										<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
										<input type='hidden' name='action' value="change" />
										<select name='quantity' class='quantity' onChange="this.form.submit()">
											<option <?php if ($product["quantity"] == 1) echo "selected"; ?> value="1">1</option>
											<option <?php if ($product["quantity"] == 2) echo "selected"; ?> value="2">2</option>
											<option <?php if ($product["quantity"] == 3) echo "selected"; ?> value="3">3</option>
											<option <?php if ($product["quantity"] == 4) echo "selected"; ?> value="4">4</option>
											<option <?php if ($product["quantity"] == 5) echo "selected"; ?> value="5">5</option>
										</select>
									</form>
								</td>
								<td><?php echo "₹" . $product["price"]; ?></td>
								<td><?php echo "₹" . $product["price"] * $product["quantity"]; ?></td>
							</tr>
						<?php
							$total_price += ($product["price"] * $product["quantity"]);
						}
						?>
						<tr>
							<td colspan="5" align="right">
								<strong>TOTAL: <?php echo "$" . $total_price; ?></strong>
							</td>
						</tr>
					</tbody>
				</table>
			<?php
			} else {
				echo "<h3>Your cart is empty!</h3>";
			}
			?>
		</div>

		<div style="clear:both;"></div>

		<div class="message_box" style="margin:10px 0px;">
			<?php echo $status; ?>
		</div>
		<a class="thanks-btn" style='margin-left:50px; font-size:20px' href="thanks.php"> <button style='padding:10px; background-color:#ffa31a; border:none;border-radius: 15px;width:500px;font-size:20px;font-weight:bold;text-transform:uppercase; cursor:pointer;color:#1b1b1b;'>Thank You For Ordering</button> </a>

		<br /><br />

	</div>
</body>

</html>