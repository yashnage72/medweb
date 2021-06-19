<?php   
session_start();  
if(!isset($_SESSION["sess_user"])){  
    echo '<script>alert("Plz login first!!.")</script>';  
} else {  
?>  
  
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
                    <li><a href="profile.php"><?=$_SESSION['sess_user'];?></a></li>

                </div>
            </ul>
        </div>
    </header> 
<div id="frm7"><br><br><br><br><br><br>      
<h1>Welcome, <?=$_SESSION['sess_user'];?>! <a href="logout.php">Logout</a></h1><br>  
<br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div> 
<footer>
            <div class="copyright">
                <p>&copy 2020 ePharma. All Rights Reserved</p>
            </div>
        </footer>

    </div>
</body>  
</html>  
<?php  
}  
?> 