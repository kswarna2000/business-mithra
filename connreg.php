
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "customers");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$mobile=$_POST["mobile"];
$email=$_POST["email"];
$about=$_POST["about"];
// Escape user inputs for security
// Escape user inputs for security
// Attempt insert query execution
$sql1="select * from list where fname='$fname' and lname='$lname' and mobile='$mobile' and email='$email'";
$result = $link->query($sql1);
if ( mysqli_num_rows($result) > 0){
include("regfail1.html");
}
else{

if(!empty($_POST["fname"])and !empty($_POST["lname"]) and!empty($_POST["mobile"]) and !empty($_POST["email"])and!empty($_POST["about"]) ){
$sql = "INSERT INTO list(fname,lname,mobile,email,about) VALUES ('$fname','$lname','$mobile','$email','$about')";
$sql1 = "INSERT INTO statistics (custid) VALUES ('$mobile')";
if(mysqli_query($link, $sql) and mysqli_query($link,$sql1))
{   
 include("success.html");
}
}
 else{
    include("regfail.html");
}
} 
// Close connection
mysqli_close($link);
?>





















?>
