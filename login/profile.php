tml>

<head>
	<title>Profile</title>
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
					<li><a href="#"><i class="fa fa-cart-plus fa-lg"></i> Cart</a></li>
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

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "miniproject";

$con = mysqli_connect($servername, $username, $password, $database);

if (!$con) 
{
    echo "Connection could not be made because ---> " . mysqli_connect_error();
}


else
{
	if(isset($_SESSION["sess_user"]))
	{
		$query=mysqli_query($con,"SELECT * FROM register1 WHERE user='".$_SESSION['sess_user']."' ");
		$numrows=mysqli_num_rows($query);  
            if($numrows!=0)  
            {  
                while($row=mysqli_fetch_assoc($query))  
                {  
                    $dbusername=$row['user'];  
                    $dbpassword=$row['pass'];
                    $dbfname=$row['fname'];
                    $dbmname=$row['mname'];  
                    $dblname=$row['lname'];
                    $dbemail=$row['email'];
                    $dbaddress=$row['address'];
                    $dbphno=$row['phno'];  
                }
            }    
	}  
}











?>
<br><br><br><br><br><br><br><br><br><br>
<?php
$dbname= $dbfname." ". $dbmname." ". $dblname;



?>
<h1 id="profile">Profile</h1>
<table class="styled-table">
<br><br><br>
    <tbody>
        <tr>
            <td>Name</td>
            <td><?php echo $dbname;?></td>
        </tr>
        <tr class="active-row">
            <td>Email</td>
            <td><?php echo $dbemail;?></td>
        </tr>
        <tr>
            <td>phone number</td>
            <td><?php echo $dbphno;?></td>
        </tr>
        <tr class="active-row">
            <td>Address</td>
            <td><?php echo $dbaddress;?></td>
        </tr>
        <!-- and so on... -->
    </tbody>
</table>


<br><br><br><br><br><br><br><br>

		<footer>
			<div class="copyright">
				<p>&copy 2020 ePharma. All Rights Reserved</p>
			</div>
		</footer>

	</div>