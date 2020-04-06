
<?php
session_start();
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "customers");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$itemname=$_SESSION["iname"];
$price=$_POST["price"];
$profit=$_POST["profit"];
$mobile=$_SESSION["mobile"];
$sql = "update info set price='$price' where itemname='$itemname'";
$sql1="update info set profit='$profit' where itemname='$itemname'";
if(mysqli_query($link, $sql) and mysqli_query($link, $sql1) and ($link->query($sql) === TRUE) and !empty($_POST["price"])and!empty($_SESSION["mobile"]) ){
   include('modsuccess.php');
} else{
    include("modfail.php");
}
// Close connection
mysqli_close($link);
?>

