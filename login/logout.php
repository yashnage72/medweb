<!DOCTYPE html>
<html>
<head>
	<title>logout</title>
	<style type="text/css">
		
		body{  
              
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background-color: #1ce1e8 ;  
    color: palevioletred;  
    font-family: verdana;  
    font-size: 100%  
      
        }  

	</style>
</head>
<body>


<?php   
session_start();  
unset($_SESSION['sess_user']);  
session_destroy();  
header("location:login.php");  
?>
</body>
</html>