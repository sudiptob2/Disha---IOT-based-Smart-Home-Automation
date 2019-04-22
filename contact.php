<?php
session_start();
if(!isset($_SESSION['username']))
{
	header('location: login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>About Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
	  margin-top:80px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
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
      <a class="navbar-brand" href="index.php"><img class="img-rounded" src="images/logo.png" alt="Smart Home Automation" width="64px" height="32px" style="margin-bottom:10px"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Dashboard</a></li>
        <li><a href="about.php">About</a></li>
        <li class="active"><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-md-2 sidenav">
      <h3><a id="l"  href="room1.php">Room 1</a></h3>
      <h3><a id="f"  href="room2.php">Room 2</a></h3>
      <h3><a id="o" href="#">Room 3</a></h3>
    </div>
    <div class="col-md-8 text-left"> 	
        <div>
		    <h3>For any query leave your messege here</h3>
			<form method="POST" action="" role="form">
			<div class="form-group">
			    <label for="username">Name :</label><br>
			    <input type="text" name="name" id="username" placeholder="Enter your name">
			</div>
			<div class="form-group">
				<label for="email">Email address :</label><br>
			    <input type="email" name="email" id="email" placeholder="Enter your email">
			</div>
			<div class="form-group">
				<label for="messege">Messege :</label><br>
			    <textarea name="messege" rows="5" id="messege" placeholder="Enter your messege"></textarea>
			</div>
				<input type="submit" name="submit" value="Submit" class="btn btn-default">
			</form>
		</div>
	</div>
  </div>
</div>
<p style="visibility:hidden" id="testing">ok!</p>
<?php
include('config.php');
if(isset($_POST['submit']))
{
	try{
		
	
	$stmt = $conn->prepare("INSERT INTO contact (name, email,messege)
    VALUES (:name, :email,:messege)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
	$stmt->bindParam(':messege', $messege);
    $name=$_POST['name'];
	$email=$_POST['email'];
	$messege=$_POST['messege'];
	$stmt->execute();
	echo "<script>alert('Your submission is successfull!!!')</script>";
	}
	catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
	
	
}
?>
<footer class="container-fluid text-center">
  <p>Powered By - <strong>Patuakhali Science & Technology University</strong></p>
</footer>
</body>
</html>
