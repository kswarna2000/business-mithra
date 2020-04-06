<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<title>PROFILE</title>
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
table#t01 {
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
<h2 style="color:red;font-size:40px">YOUR PROFILE</h2>
<br/>
<br/>

<table id="t01">
  <tr>
    <td>FIRST NAME</td>
    <td><?php echo strtoupper($_SESSION["fname"]);?></td>
  </tr>
  <tr>
    <td>LAST NAME</td>
    <td><?php echo strtoupper($_SESSION["lname"]);?></td>
  </tr>
  <tr>
    <td>MOBILE NO</td>
    <td><?php echo $_SESSION["mobile"];?></td>
  </tr>
<tr>
    <td>EMAIL</td>
    <td><?php echo $_SESSION["email"];?></td>
  </tr>
  <tr>
    <td>ADDRESS</td>
    <td> <?php echo strtoupper($_SESSION["about"]);?></td>

  </tr>
</table>


</div>
</html>
