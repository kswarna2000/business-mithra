
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
$_SESSION["iname"]=$itemname;
$mobile=$_SESSION["mobile"];
$sql2="SELECT * FROM info where itemname='$itemname'";
$result = $link->query($sql2);

if ($result->num_rows == 0) {
echo "NO SUCH ITEM FOUND <br/> ADD ANOTHER ITEM";
}
if(isset($_POST['delete']))
{
$sql1 = "DELETE FROM info where itemname='$itemname'";

if ($link->query($sql1) === TRUE) {
    include("deleteditem.html");
} else {
    echo "Error deleting record: " . $link->error;
}
}
// Escape user inputs for security
// Escape user inputs for security
// Attempt insert query execution
else
{
include("modify.html");
 }
// Close connection
mysqli_close($link);
?>
