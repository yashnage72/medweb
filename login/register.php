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

    if(isset($_POST["login"]))
    {  
  
        if(!empty($_POST['userid']) && !empty($_POST['password'])) 
        {  
            $user1=$_POST['userid'];  
            $pass1=$_POST['password'];  
  
  
            $query=mysqli_query($con,"SELECT * FROM register1 WHERE user='".$user1."' AND pass='".$pass1."'");  
            $numrows=mysqli_num_rows($query);  
            if($numrows!=0)  
            {  
                while($row=mysqli_fetch_assoc($query))  
                {  
                    $dbusername=$row['user'];  
                    $dbpassword=$row['pass'];  
                }  
  
                if($user1 == $dbusername && $pass1 == $dbpassword)  
                {  
                    session_start();  
                    $_SESSION['sess_user']=$user1;  
  
                    /* Redirect browser */  
                    header("Location: profile.php");  
                }
                else
                {
                    
                }  
            } 
            else 
            {  
                 echo "Invalid username or password!";  
            }  
  
        } 
        else 
        {  
            echo "All fields are required!";  
        }  
    } 
} 


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

            if (isset($_POST["register"])) 
            {
                if (!empty($_POST['user']) && !empty($_POST['password'])  && !empty($_POST['fname']) && !empty($_POST['mname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['add']) && !empty($_POST['phno'])) 
                {
                    $user = $_POST['user'];
                    $pass = $_POST['password'];
                    $fname = $_POST['fname'];
                    $mname = $_POST['mname'];
                    $lname = $_POST['lname'];
                    $email = $_POST['email'];
                    $address = $_POST['add'];
                    $phno = $_POST['phno'];        
                   
                                       
                    $query = mysqli_query($con, "SELECT * FROM register1 WHERE user='".$user."'");
                    $numrows = mysqli_num_rows($query);
                    if ($numrows == 0) 
                    {
                        $sql = "INSERT INTO register1(`user`, `pass`, `fname`, `mname`, `lname`, `email`, `address`, `phno`) VALUES('$user','$pass','$fname','$mname','$lname','$email','$address','$phno')";
            
                        $result = mysqli_query($con, $sql);
                        if ($result) 
                        {
                            
                            echo '<script>alert("Account Successfully Created")</script>';
                            


                        } 
                        else 
                        {
                            echo "Failure!";
                        }
                    }
                    else 
                    {
                            echo '<script>alert("That username already exists! Please try again with another.")</script>';
                            
                    }                    
                }
                else 
                {
                    echo '<script>alert("All fields are required!")</script>';
                    
                }
            }

        }

    



    
    ?>
