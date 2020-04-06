<?php session_start();?>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "customers");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$custid=$_SESSION["mobile"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$mobile=$_POST["mobile"];
$email=$_POST["email"];
$about=$_POST["about"];
$salary=$_POST["salary"];
$mobile1=$_SESSION["mobile"];
// Escape user inputs for security
// Escape user inputs for security
// Attempt insert query execution
$sql1="select * from employee where custid='$custid' and fname='$fname' and lname='$lname' and mobile='$mobile' and email='$email'";
$result = $link->query($sql1);
if ( mysqli_num_rows($result) > 0){
include("regfail2.html");
}
else{

if( !empty($_POST["fname"])and !empty($_POST["lname"]) and!empty($_POST["mobile"]) and !empty($_POST["email"])and!empty($_POST["about"]) ){
$sql = "INSERT INTO employee(custid,fname,lname,mobile,email,about,salary) VALUES('$custid','$fname','$lname','$mobile','$email','$about','$salary')"; 
$sql4= "UPDATE statistics SET totalemp=totalemp+1 WHERE custid='$mobile1'";
$sql5= "UPDATE statistics SET totalsal=totalsal+$salary WHERE custid='$mobile1'";
if(mysqli_query($link, $sql4))
{
if(mysqli_query($link, $sql5)) 
{

if(mysqli_query($link, $sql))
{    
include("empsuccess.html");
}
}
}
}
 else{
    include("empfail.html");
}
 }
// Close connection
mysqli_close($link);
?>
