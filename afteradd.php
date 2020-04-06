
<?php
session_start();
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "customers");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$itemname=$_POST["itemname"];
$itemno=$_POST["itemno"];
$units=$_POST["units"];
$price=$_POST["price"];
$mobile=$_SESSION["mobile"];
$profit=$_POST["profit"];
// Escape user inputs for security
// Escape user inputs for security
// Attempt insert query execution
$sql1="SELECT * from info where itemname='$itemname'";
$result = $link->query($sql1);
if ($result->num_rows > 0) {
include("addfail1.php");
}
else
{

if(!empty($_POST["itemname"])and !empty($_POST["itemno"]) and!empty($_POST["units"]) and !empty($_POST["price"])and!empty($_SESSION["mobile"]) ){
$sql = "INSERT INTO info(custid,itemname,itemno,price,units,profit) VALUES ('$mobile','$itemname','$itemno',$price,'$units',$profit)";
if(mysqli_query($link, $sql))
{
   include('addsuccess.php');
}
}
 else{
    include("addfail.php");
}
} 
// Close connection
mysqli_close($link);
?>
