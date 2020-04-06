<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<title>ADD ITEM</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
#btn
{
color:white;
letter-spacing: normal;
text-rendering: optimizelegibility;
background-color:green;
text-align:center;
text-decoration: none;
display: inline-block;
background-attachment: scroll;
background-clip: border-box;
background-color: rgb(105, 167, 78);
background-image: linear-gradient(rgb(103, 174, 85), rgb(87, 136, 67));
background-origin: padding-box;
background-position: 0% 0%;
background-position-x: 0%;
background-position-y: 0%;
background-repeat: repeat;
background-size: auto auto;
border-bottom-color: rgb(44, 81, 21);
border-bottom-left-radius: 5px;
border-bottom-right-radius: 5px;
border-bottom-style: solid;
border-bottom-width: 1px;
border-image-outset: 0;
border-image-repeat: stretch stretch;
border-image-slice: 100%;
border-image-source: none;
border-image-width: 1;
border-left-color: rgb(59, 110, 34);
border-left-style: solid;
border-left-width: 1px;
border-right-color: rgb(59, 110, 34);
border-right-style: solid;
border-right-width: 1px;
border-top-color: rgb(59, 110, 34);
border-top-left-radius: 5px;
border-top-right-radius: 5px;
border-top-style: solid;
border-top-width: 1px;
box-shadow: rgb(164, 227, 136) 0px 1px 1px 0px inset;
color: rgb(255, 255, 255);
left:0px;
top:315px;/*it is based on our division*/
font-size:25px;
margin:0px 0px 0px 0px;
height:35px;
width:175px;
}</style>
</head>
<body style="background-color:#99ff99">

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
<h1 style="color: #990000">FILL WITH THE ITEM DETAILS</h1>
<form action="afteradd.php" method='POST'>
<span style="color:brown;font-size:30px;"><b>ITEM NAME:</b></span> <input style="height:35px;font-size:30px;"size="30"name="itemname"type="text" placeholder="Item name"><br/><br/>
<span style="color:brown;font-size:30px;"><b>ITEM NO:</b></span><input  style="height:35px;font-size:25px;"size="30"name="itemno" type="text" placeholder="itemno"><br/><br/>
<span style="color:brown;font-size:30px;"><b>UNITS:</b></span><input  style="height:35px;font-size:25px;"size="30"name="units" type="text" placeholder="units"><br/><br/>
<span style="color:brown;font-size:30px;"><b>PRICE PER UNIT:</b></span><input  style="height:35px;font-size:25px;"size="30"name="price" type="text" placeholder="price per unit"><br/><br/>
<span style="color:brown;font-size:30px;"><b>PROFIT:</b></span><input  style="height:35px;font-size:25px;"size="30"name="profit" type="text" placeholder="Enter profit">
<br/><br/><br/>
<span style="left:200px;top:450px;position:absolute"><button id="btn">SUBMIT</button></span>
</form>
</body>
</html>
