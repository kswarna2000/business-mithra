
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "customers");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 $pwd = $_POST["pwd"];
 $email= $_POST["email"];
// Escape user inputs for security
 // Attempt insert query execution

$sql = "select * from list WHERE email='$email' and mobile='$pwd'";
$result = $link->query($sql);
if ( mysqli_num_rows($result) > 0){
        $row = $result->fetch_assoc();
	include("loggedin.php");
}
 else{
   include("loginfail.html");
}
 
// Close connection
mysqli_close($link);
?>
