<!DOCTYPE html>
<html lang="en">
<head>
  <title>ADD EMPLOYEE</title>
  <meta charset="utf-8">
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

        <li><a href="logout.html"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
  <h2 style="color:#734d26;text-align:center;"><b>ENTER EMPLOYEE DETAILS</b></h2>
  <form action="connadd.php" name="registration" method="post">
<div class="form-group">
  <label for="usr">First Name:</label>
  <input type="text" name="fname" class="form-control" placeholder="Enter your first name" id="usr">
</div>
<div class="form-group">
  <label for="usr">Last Name:</label>
  <input type="text" class="form-control" name="lname"placeholder="Enter your last name" id="usr1">
</div>
<div class="form-group">
  <label for="usr">Mobile no:</label>
  <input type="text" name="mobile" class="form-control" placeholder="Enter your mobile no"id="usr2">
</div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" name="email" id="email" class="form-control" placeholder="Enter email" size="20"name="email">
</div>
<div class="form-group">
  <label for="usr">Salary:</label>
  <input type="text" name="salary" class="form-control" placeholder="Enter your salary"id="usr2">
</div>
 <div class="form-group">
  <label for="comment">Address:</label>
  <textarea  name="about"rows="5" class="form-control" placeholder="Enter your address" id="comment"></textarea>
</div> 
<button type="submit"value="register" name="register" class="btn btn-success">Add Employee</button>
</form>
</div>
</body>
</html>

