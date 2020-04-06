<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<title>BILL ITEM</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
h1{
text-align:center;
color:brown;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
    text-align: left;
}
table{
    width: 100%;    
    background-color: #f1f1c1;
}
</style>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">BUSINESS MITHRA</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="loggedin1.php">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">options <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="display.php">display items</a></li>
            <li><a href="addemp.php">add employee</a></li>
            <li><a href="dispemp.php">display employee</a></li>
<li><a href="statistics.php">transaction statistics</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
   <li><a href="profile.php"><span class="glyphicon glyphicon-user""></span> profile</a></li> 
<li><a href="logout.html"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<span style="color:brown;font-size:30px;"><b>ITEM NAME:</b></span> <input style="height:35px;font-size:30px;"size="30"id="itemname"name="itemname"type="text" placeholder="Item name"><br/><br/>
<span style="color:brown;font-size:30px;"><b>Enter the number of units:</b></span> <input style="height:35px;font-size:30px;"size="30"name="number"id="number"type="text" placeholder="Enter here"><br/><br/>
<input type="submit" name="submit" value="submit">
<input type="submit" name="delete" value="refresh">
</form>
<br/><br/>

<p id="demo"></p>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password)
one idea i used was if empty form is submitted delete records */
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$link = mysqli_connect("localhost", "root", "", "customers");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$itemname=$_POST["itemname"];
$units=$_POST["number"];
$mobile=$_SESSION["mobile"];
// Escape user inputs for security
 // Attempt insert query execution
if(isset($_POST['delete']))
{
$sql = "DELETE FROM temp";

if ($link->query($sql) === TRUE) {
    echo "Record deleted successfully<br/>START NEW TRANSACTION";
} else {
    echo "Error deleting record: " . $link->error;
}
}
else
{
$sql1 = "select * from info WHERE itemname='$itemname'";
$result1=$link->query($sql1);
if ($result1->num_rows > 0) {
    // output data of each row
    if($row = $result1->fetch_assoc()) {
$ino=$row["itemno"];
$iname=$row["itemname"];
$price=$units*$row["price"];
$profit=$units*$row["profit"];
$t=$price;
$r=$profit;

$_SESSION["profit"]=$_SESSION["profit"]+$profit;
$_SESSION["total"]=$_SESSION["total"]+$price;
$sql4= "UPDATE statistics SET total=total+$t WHERE custid='$mobile'";
if (mysqli_query($link, $sql4))
echo "s4";

$sql5= "UPDATE statistics SET totprofit=totprofit+$r WHERE custid='$mobile'";
if (mysqli_query($link, $sql5))
echo "s5";
$sql2="INSERT INTO temp(ino,iname,price,profit,number) VALUES('$ino','$iname','$price','$profit','$units')";

if (mysqli_query($link, $sql2)) {
    echo "New record successfully";
} else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($link);
}

}
}
else {
    echo "NO SUCH ITEM PRESENT";
}

$sql3 = "select * from temp";
$result2 = $link->query($sql3);
if (  mysqli_num_rows($result2) > 0){
echo "<h1>BILL</h1>";
echo "<table>";
echo "<tr>";
echo"<th>ITEM NO</th>";
echo "<th>ITEM NAME</th>";
echo "<th>NO.OF.ITEMS</th>";
echo "<th>PRICE</th>";

echo "</tr>";
$total=0;
$totitem=0;
        while($row = $result2->fetch_assoc())
{
echo "<tr>";
echo "<td>";
echo $row["ino"];
echo "</td>";
echo "<td>";
echo $row["iname"];
echo "</td>";
echo "<td>";
echo $row["number"];
echo "</td>";
echo "<td>";
echo $row["price"];
echo "</td>";
echo "</tr>";
 $total=$total+$row["price"];
$totitem=$totitem+$row["number"];
}

echo "<tr>";
echo "<td>";
echo "TOTAL";
echo "</td>";
echo "<td>";
echo "PRICE";
echo "</td>";
echo "<td>";
echo $totitem;
echo "</td>";
echo "<td>";
echo $total;
echo "</td>";
echo "</tr>";
echo "</table>";

}
 else{
   echo "<h2>NO RECORDS FOUND</h2>";
} 
}
$link->close();
// Close connection
}
?>
<br/><br/>

</html>
