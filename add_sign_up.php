
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "personal_voult_db";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

$tname = $_POST['tname'] ;
$temail =$_POST['temail'] ;
$tmobile =$_POST['tmobile'] ;
$tpassword = $_POST['tpassword'] ;
$sqlInsert = "INSERT INTO tbl_register(uname,uemail,umobile,upassword) VALUES ('".$tname."','".$temail."','".$tmobile ."','".$tpassword ."')";
 $result = mysqli_query($conn, $sqlInsert);
header("location: http://localhost/Saniya_wallet/login.html");
if (! $result) {
    $result = mysqli_error($conn);
}
?>