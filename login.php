<?php
session_start();
if(isset($_SESSION['username']))
{
	header('location: index.php');
}

?>
<!Doctype html>
<html>
<head>
<title>login</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <style>
  
  footer {
      background-color: #555;
      color: white;
      padding: 15px;
	  margin-top:280px;
    }
  </style>
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
      <a class="navbar-brand" href="#"><img class="img-rounded" src="images/logo.png" alt="Smart Home Automation" width="64px" height="32px" style="margin-bottom:10px"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#">Smart Home Automation</a></li>
        
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <h2>login form</h2>
  <form class="form-horizontal" role="form" action="login.php" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="user">Username:</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" name="user" placeholder="Enter Username">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pass">Password:</label>
      <div class="col-sm-2">          
        <input type="password" class="form-control" name="pass" placeholder="Enter Password">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-default" name='submit' value="login">
      </div>
    </div>
  </form>
</div>


<?php
require 'config.php';
    $stmt = $conn->prepare("select * from login where user=:username and pass=:password");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
	if(isset($_POST['submit']))
	{
		$username=$_POST['user'];
		$password=$_POST['pass'];
		$stmt->execute();
		//$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if($stmt->rowCount()!=0)
		{
			$_SESSION['username'] = $username;
			header("location: index.php");
		}
		else
		{
			echo "<script>alert('Wrong Username or Password')</script>";
			
		}
		
	}

?>
<footer class="container-fluid text-center">
  <p>Powered By - <strong>Patuakhali Science & Technology University</strong></p>
</footer>
</body>
</html>