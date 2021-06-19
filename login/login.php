<html>

<head>
	<title>Login And Registration form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="login.css">
</head>

<body>

	<header>
		<!-- NAVBAR  -->   
  
		<div class="nav">
			<ul>
				<div>
					<div class="search-container">

						<form>
							<a href="../index.php"><img src="logo.png" alt="ePharma"></a>							
						</form>

					</div>
				</div>
				<div>
<?php   
session_start();  
if(isset($_SESSION["sess_user"])){  
?> <li><a href="logout.php"><i class="fa fa-sign-in fa-lg"></i>Logout</a></li>
<?php  
}
else{
    ?><li><a href="login.php"><i class="fa fa-sign-in fa-lg"></i> Login/Signup</a></li> 
<?php  
}  
?>  
					<li><a href="../demo/index.php"><i class="fa fa-cart-plus fa-lg"></i> Cart</a></li>
					<li><a href="../medicine/contents.php"><i class="fa fa-medkit fa-lg"></i> Order Medicines</a></li>
					<li><a href="#"><i class="fa fa-info fa-lg"></i> Healthcare Products</a></li>
<?php  
if(isset($_SESSION["sess_user"])){  
?> <li><a href="profile.php"><i class="fas fa-user-circle"></i><?=$_SESSION['sess_user'];?></a></li>
<?php  
}

?> 



				</div>
			</ul>
		</div>
	</header>

	<div class="hero">
		<div class="form-box" id="change">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="login()">Log In</button>
				<button type="button" class="toggle-btn" onclick="register()">Register</button>

			</div>
			<form id="login" class="input-group" action="register.php" method="POST">
				<input type="text" class="input-field" placeholder="User Id" required name="userid">
				<input type="password" class="input-field" placeholder="Password" required name="password">
				<br><br><br>
				<button type="submit" class="submit-btn" name="login">Log In</button>
			</form>
			<form id="register" class="input-group" action="register.php" method="POST">
				<input type="text" class="input-field" placeholder="User Id" required name="user">
				<input type="text" class="input-field" placeholder="First Name" required name="fname">
				<input type="text" class="input-field" placeholder="Middle Name" name="mname">
				<input type="text" class="input-field" placeholder="Last Name" required name="lname">
				<input class="input-field" type="date" placeholder="DOB" name="dob">
				<input type="email" class="input-field" placeholder="Email Id" required name="email">
				<textarea class="input-field" cols="30" rows="2" placeholder="Address" name="add"></textarea>
				<input type="number" id="phone" class="input-field" name="phno" placeholder="Phone" pattern="[0-9]{10}" >
				<input type="password" class="input-field" placeholder="Password" required name="password">
				<input type="checkbox" class="check-box" required>
				<span>I agree to the terms & conditions</span>
				<button type="submit" class="submit-btn" name="register">Register</button>
			</form>
		</div>
		<footer>
			<div class="copyright">
				<p>&copy 2020 ePharma. All Rights Reserved</p>
			</div>
		</footer>

	</div>







	<script>
		var x = document.getElementById("login");
		var y = document.getElementById("register");
		var z = document.getElementById("btn");
		function register() {
			x.style.left = "-400px";
			y.style.left = "50px";
			z.style.left = "110px";
			var newClass = document.getElementById('change');
			newClass.classList.add('form-box-reg');
			newClass.classList.remove('form-box');
		}
		function login() {
			x.style.left = "50px";
			y.style.left = "450px";
			z.style.left = "0px";
			var isformbox = document.getElementsByClassName('form-box-reg');
			if (isformbox.length > 0) {
				var newClass = document.getElementById('change');
				newClass.classList.add('form-box');
				newClass.classList.remove('form-box-reg');
				
			}
		}
	</script>

</body>

</html>