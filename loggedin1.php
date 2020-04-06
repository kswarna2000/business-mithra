<?php session_start();?>
<!DOCTYPE html>

<html lang="en">
<head>
  <title>Logged in</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body style="background-image:url('logo.jpeg')">
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

<h1 style="color:red;font-size:75px;text-shadow: 3px 2px #ffff80;font-style:italic;left:200px;top:300px;text-align:center"> WELCOME <?php  echo strtoupper($_SESSION['fname'])?></h1>
<div style="left:400px;top:200px;position:absolute;">
<div style="background-image:url('sec1.jpeg');width:500px;height:700px;text-align:center;">
<div style="text-align:center;font-style:italic;color:#000066;font-size:30px;">
Hey hurry up and add item to your cart.<br/>You are one click away to start using BUSINESS MITHRA<br/>Click the following button to<br/>
add items along with their prices.<br/>Now no need toremember the prices of all the items in your shop<br/><br/><br/>
<a href="additem.php"><button>Add item</button></a>
</div>
</div>
<div style="background-image:url('sec2.jpeg');width:500px;height:700px;text-align:center;">
<div style="text-align:center;font-style:italic;color:#000066;font-size:30px;">
Hey here is the way to <br/>modify/delete item from your cart using BUSINESS MITHRA<br/>Click the following button to<br/>
modify item details.<<br/><br/><br/>
<a href="modifyitem.php"><button>Modify item</button></a>
</div>
</div>
<div style="background-image:url('sec3.jpeg');width:500px;height:700px;text-align:center;">
<div style="text-align:center;font-style:italic;color:#000066;font-size:30px;">
Hey hurry start using our billing .<br/>option to create bills for your customers.<br/>Click the following button to<br/>
craete bills for your customers.<br/>Now no need to any calculations on your own.<br/>We are here to provide you the details.<br/><br/><br/>
<a href="bill.php"><button>Create bill</button></a>
</div>
</div>
</div>
</body>
</html>
