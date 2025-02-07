<?php      
   $servername = "localhost";
$username = "root";
$password = "";
$db = "personal_voult_db";
session_start();
// Create connection
$conn = new mysqli($servername, $username, $password,$db);  
    $username = $_POST['txtname'];  
    $password = $_POST['txtpass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select uemail,upassword from tbl_register where uemail = '$username' and upassword = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count >0){  
            $_SESSION['username']=$username;
   
            header("location: http://localhost/Saniya_wallet/MyAct.php"); 
        }  
        else{  
           header("location: http://localhost/Saniya_wallet/invalid.html");
        }     
?>