<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<title>MODIFY ITEM</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
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

<div style="text-align:left">
<h1 style="color: #990000">FILL WITH THE ITEM TO BE MODIFIED</h1>
<form action="aftermodify.php" method='POST'>
<span style="color:brown;font-size:30px;"><b>ITEM NAME:</b></span> <input style="height:35px;font-size:30px;"size="30"name="itemname"type="text" placeholder="Item name"><br/><br/>

<input type="submit" name="modify" value="modify">
<input type="submit" name="delete" value="delete">
<br/><br/>

</form>
</body>
</html>
