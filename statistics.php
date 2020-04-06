<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<title>STATISTICS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
    text-align: left;
}
table {
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

        <li><a href="logout.html"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<div style="left:450px;top:50px;position:absolute;font-style:bold">
<h2 style="color:red;font-size:40px">COMPANY STATISTICS</h2>
</div><br/><br/><br/>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password)
one idea i used was if empty form is submitted delete records */
$link = mysqli_connect("localhost", "root", "", "customers");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$tot=$_SESSION["total"];
$profit=$_SESSION["profit"];
$mobile=$_SESSION["mobile"];
$sql3 = "select * from statistics where custid='$mobile'";
$result2 = $link->query($sql3);
if (  mysqli_num_rows($result2) > 0){
echo "<table>";
echo "<tr>";
echo"<th>CATEGORY</th>";
echo "<th>VALUE</th>";
echo "</tr>";
$total=0;
        while($row = $result2->fetch_assoc())
{
echo "<tr>";
echo "<td>";
echo "TOTAL TURNOVER";
echo "</td>";
echo "<td>";
echo $row["total"];
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "TOTAL PROFIT";
echo "</td>";
echo "<td>";
echo $row["totprofit"];
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "TOTAL EMPLOYEES";
echo "</td>";
echo "<td>";
echo $row["totalemp"];
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "TOTAL SALARY";
echo "</td>";
echo "<td>";
echo $row["totalsal"];
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "SESSION TURNOVER";
echo "</td>";
echo "<td>";
echo $tot;
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
echo "SESSION PROFIT";
echo "</td>";
echo "<td>";
echo $profit;
echo "</td>";
echo "</tr>";
echo "<td>";
echo "TOTAL PROFIT PERCENTAGE";
echo "</td>";
echo "<td>";
echo ($row["totprofit"]/$row["totalsal"])*100;
echo "</td>";
echo "</tr>";
}
echo "</table>";
}
else
{
echo "NO RECORDS FOUND";
}
$link->close();
// Close connection

?>
</html>

