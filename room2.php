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
  <title>Smart Home Automation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>

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
<script>
window.onload = function(){
    if (annyang) {
        var commands = {
			  '*light two on': function() {
                lighton(2);
            },'*light 2 on': function() {
                lighton(2);
            },'*light to on': function() {
                lighton(2);
            },'*light too on': function() {
                lighton(2);
            },
			
			 '*lite two on': function() {
                lighton(2);
            },'*lite 2 on': function() {
                lighton(2);
            },'*lite to on': function() {
                lighton(2);
            },'*lite too on': function() {
                lighton(2);
            }, '*write two on': function() {
                lighton(2);
            },'*write 2 on': function() {
                lighton(2);
            },'*write to on': function() {
                lighton(2);
            },'*write too on': function() {
                lighton(2);
            }, '*right two on': function() {
                lighton(2);
            },'*right 2 on': function() {
                lighton(2);
            },'*right to on': function() {
                lighton(2);
            },'*right too on': function() {
                lighton(2);
            }, '*like two on': function() {
                lighton(2);
            },'*like 2 on': function() {
                lighton(2);
            },'*like to on': function() {
                lighton(2);
            },'*like too on': function() {
                lighton(2);
            }, 
			
			'*light two all': function() {
                lighton(2);
            },'*light 2 all': function() {
                lighton(2);
            },'*light to all': function() {
                lighton(2);
            },'*light too all': function() {
                lighton(2);
            },
			
			 '*lite two all': function() {
                lighton(2);
            },'*lite 2 all': function() {
                lighton(2);
            },'*lite to all': function() {
                lighton(2);
            },'*lite too all': function() {
                lighton(2);
            }, '*write two all': function() {
                lighton(2);
            },'*write 2 all': function() {
                lighton(2);
            },'*write to all': function() {
                lighton(2);
            },'*write too all': function() {
                lighton(2);
            }, '*right two all': function() {
                lighton(2);
            },'*right 2 all': function() {
                lighton(2);
            },'*right to all': function() {
                lighton(2);
            },'*right too all': function() {
                lighton(2);
            }, '*like two all': function() {
                lighton(2);
            },'*like 2 all': function() {
                lighton(2);
            },'*like to all': function() {
                lighton(2);
            },'*like too all': function() {
                lighton(2);
            }, 
			
			'*light two of': function() {
                lightoff(2);
            },'*light 2 of': function() {
                lightoff(2);
            },'*light to of': function() {
                lightoff(2);
            },'*light too of': function() {
                lightoff(2);
            },'*lite two of': function() {
                lightoff(2);
            },'*lite 2 of': function() {
                lightoff(2);
            },'*lite to of': function() {
                lightoff(2);
            },'*lite too of': function() {
                lightoff(2);
            }, '*write two of': function() {
                lightoff(2);
            },'*write 2 of': function() {
                lightoff(2);
            },'*write to of': function() {
                lightoff(2);
            },'*write too of': function() {
                lightoff(2);
            }, '*right two of': function() {
                lightoff(2);
            },'*right 2 of': function() {
                lightoff(2);
            },'*right to of': function() {
                lightoff(2);
            },'*right too of': function() {
                lightoff(2);
            }, '*like two of': function() {
                lightoff(2);
            },'*like 2 of': function() {
                lightoff(2);
            },'*like to of': function() {
                lightoff(2);
            },'*like too of': function() {
                lightoff(2);
            }, 
			
			'*light two off': function() {
                lightoff(2);
            },'*light 2 off': function() {
                lightoff(2);
            },'*light to off': function() {
                lightoff(2);
            },'*light too off': function() {
                lightoff(2);
            },'*lite two off': function() {
                lightoff(2);
            },'*lite 2 off': function() {
                lightoff(2);
            },'*lite to off': function() {
                lightoff(2);
            },'*lite too off': function() {
                lightoff(2);
            }, '*write two off': function() {
                lightoff(2);
            },'*write 2 off': function() {
                lightoff(2);
            },'*write to off': function() {
                lightoff(2);
            },'*write too off': function() {
                lightoff(2);
            }, '*right two off': function() {
                lightoff(2);
            },'*right 2 off': function() {
                lightoff(2);
            },'*right to off': function() {
                lightoff(2);
            },'*right too off': function() {
                lightoff(2);
            }, '*like two off': function() {
                lightoff(2);
            },'*like 2 off': function() {
                lightoff(2);
            },'*like to off': function() {
                lightoff(2);
            },'*like too off': function() {
                lightoff(2);
            }, 
			
			'*light one on': function() {
                lighton(1);
            },
			'*light 1 on': function() {
                lighton(1);
            },
			'*light on on': function() {
                lighton(1);
            },'*lite one on': function() {
                lighton(1);
            },
			'*lite 1 on': function() {
                lighton(1);
            },
			'*lite on on': function() {
                lighton(1);
            },
			'*write one on': function() {
                lighton(1);
            },
			'*write 1 on': function() {
                lighton(1);
            },
			'*right on on': function() {
                lighton(1);
            },
			'*right one on': function() {
                lighton(1);
            },
			'*right 1 on': function() {
                lighton(1);
            },
			'*like on on': function() {
                lighton(1);
            },
			'*like one on': function() {
                lighton(1);
            },
			'*like 1 on': function() {
                lighton(1);
            },
			
			
			'*light one off': function() {
                lightoff(1);
            },
			'*light 1 off': function() {
                lightoff(1);
            },
			'*light on off': function() {
                lightoff(1);
            },'*lite one off': function() {
                lightoff(1);
            },
			'*lite 1 off': function() {
                lightoff(1);
            },
			'*lite on off': function() {
                lightoff(1);
            },
			'*write one off': function() {
                lightoff(1);
            },
			'*write 1 off': function() {
                lightoff(1);
            },
			'*right on off': function() {
                lightoff(1);
            },
			'*right one off': function() {
                lightoff(1);
            },
			'*right 1 off': function() {
                lightoff(1);
            },
			'*like on off': function() {
                lightoff(1);
            },
			'*like one off': function() {
                lightoff(1);
            },
			'*like 1 off': function() {
                lightoff(1);
            },
			
			'*light one off': function() {
                lightoff(1);
            },
			'*light 1 off': function() {
                lightoff(1);
            },
			'*light on off': function() {
                lightoff(1);
            },'*lite one off': function() {
                lightoff(1);
            },
			'*lite 1 off': function() {
                lightoff(1);
            },
			'*lite on off': function() {
                lightoff(1);
            },
			'*write one off': function() {
                lightoff(1);
            },
			'*write 1 off': function() {
                lightoff(1);
            },
			'*right on off': function() {
                lightoff(1);
            },
			'*right one off': function() {
                lightoff(1);
            },
			'*right 1 off': function() {
                lightoff(1);
            },
			'*like on off': function() {
                lightoff(1);
            },
			'*like one off': function() {
                lightoff(1);
            },
			'*like 1 off': function() {
                lightoff(1);
            },
			
			
			'*light one of': function() {
                lightoff(1);
            },
			'*light 1 of': function() {
                lightoff(1);
            },
			'*light on of': function() {
                lightoff(1);
            },'*lite one of': function() {
                lightoff(1);
            },
			'*lite 1 of': function() {
                lightoff(1);
            },
			'*lite on of': function() {
                lightoff(1);
            },
			'*write one of': function() {
                lightoff(1);
            },
			'*write 1 of': function() {
                lightoff(1);
            },
			'*right on of': function() {
                lightoff(1);
            },
			'*right one of': function() {
                lightoff(1);
            },
			'*right 1 of': function() {
                lightoff(1);
            },
			'*like on of': function() {
                lightoff(1);
            },
			'*like one of': function() {
                lightoff(1);
            },
			'*like 1 of': function() {
                lightoff(1);
            },
			
			'*light one of': function() {
                lightoff(1);
            },
			'*light 1 of': function() {
                lightoff(1);
            },
			'*light on of': function() {
                lightoff(1);
            },'*lite one of': function() {
                lightoff(1);
            },
			'*lite 1 of': function() {
                lightoff(1);
            },
			'*lite on of': function() {
                lightoff(1);
            },
			'*write one of': function() {
                lightoff(1);
            },
			'*write 1 of': function() {
                lightoff(1);
            },
			'*right on of': function() {
                lightoff(1);
            },
			'*right one of': function() {
                lightoff(1);
            },
			'*right 1 of': function() {
                lightoff(1);
            },
			'*like on of': function() {
                lightoff(1);
            },
			'*like one of': function() {
                lightoff(1);
            },
			'*like 1 of': function() {
                lightoff(1);
            },
			'*fan one on*': function() {
                fanon(1);
            },
			'*fan one off*': function() {
                fanoff(1);
            },
			'*fan on on*': function() {
                fanon(1);
            },
			'*fan on off*': function() {
                fanoff(1);
            },
			'*fan 1 on*': function() {
                fanon(1);
            },
			'*fan 1 off*': function() {
                fanoff(1);
            },
			'*fan on of*': function() {
                fanoff(1);
            },
			'*fan 1 of*': function() {
                fanoff(1);
            },
			'*fan one of*': function() {
                fanoff(1);
            },
			'*fan to all': function() {
                fanon(2);
            },
			'*fan 2 on': function() {
                fanon(2);
            },
			'*fan 2 off': function() {
                fanoff(2);
            },
			'*fan two on': function() {
                fanon(2);
            },
			'*fan two off': function() {
                fanoff(2);
            },
			'*fan two all': function() {
                fanon(2);
            },
			'*fan 2 all': function() {
                fanon(2);
            },
			'*fan to on': function() {
                fanon(2);
            },
			'*fan to off': function() {
                fanoff(2);
            },
			'*fan 2 of': function() {
                fanoff(2);
            },
			'*fan two of': function() {
                fanoff(2);
            },
			'*fan to of': function() {
                fanoff(2);
            }
			
			
			
        };
		annyang.debug();
        annyang.addCommands(commands);
        annyang.start(); 
    }
}
</script>
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
		<li class="active"><a href="index.php">Dashboard</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
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
      <h2><a id="f"  href="#">Room 2</a></h2>
      <h3><a id="o" href="#">Room 3</a></h3>
    </div>
    <div class="col-md-8 text-left"> 	
    <div id="light">	
	 <h3>Light1 :
	  
	  <button type="button" onclick="lighton(1)" class="btn btn-large btn-primary text-horizontal" id="light1on">ON</button>
	  <button type="button" onclick="lightoff(1)" class="btn btn-large btn-primary" id="light1off">OFF</button>
	  <button onclick = 'func_light1()'><img id = 'l1' src='images/light-off-r.png' alt='light-off'  width="36px" height="36px"/></button>
	  </h3>
	  <h3>Light2 :
	
	  <button type="button" onclick="lighton(2)" class="btn btn-large btn-primary" id="light2on">ON</button>
	  <button type="button" onclick="lightoff(2)" class="btn btn-large btn-primary" id="light2off">OFF</button>
	  <button onclick = 'func_light1()'><img id = 'l2' src='images/light-off-r.png' alt='light-off'  width="36px" height="36px"/></button>
	  </h3>
	  <h3 style='display:inline-block'> Fan1 :</h3><p style='display:inline-block;visibility:hidden' >w</p>
	  <h3 style='display:inline-block'><button type="button" onclick="fanon(3)" class="btn btn-large btn-primary text-vertical" id="Fan1on">ON</button>
	  <button type="button" onclick="fanoff(3)" class="btn btn-large btn-primary" id="Fan1off">OFF</button>
	  <button onclick = 'func_light1()'><img id = 'fan3' src='images/state0.png' alt='light-off' class ='' width="36px" height="36px"/></button>
	  </h3><br>
	  <h3 style='display:inline-block'> Fan2 :</h3><p style='display:inline-block;visibility:hidden' >w</p>
	
	  <button type="button" onclick="fanon(4)" class="btn btn-large btn-primary" id="fan2on">ON</button>
	  <button type="button" onclick="fanoff(4)" class="btn btn-large btn-primary" id="fan2off">OFF</button>
	  <button onclick = 'func_light1()'><img id = 'fan4' src='images/state0.png' alt='light-off' class ='' width="36px" height="36px"/></button>
	  </h3>
	  <h3>All Off :
	  
	  <button type="button" onclick="allon()" class="btn btn-large btn-primary" id="light1on">ON</button>
	  <button type="button" onclick="alloff()" class="btn btn-large btn-primary" id="light1off">OFF</button>
	  </h3>
    </div>
	</div>
  </div>
</div>
<script>
function lighton(option){
		    
             
             
			 var xmlhttp = new XMLHttpRequest();
             xmlhttp.onreadystatechange = function() {
             if (this.readyState == 4 && this.status == 200) {
                document.getElementById("testing").innerHTML = xmlhttp.responseText;
             }
        };
        xmlhttp.open("GET", "lighton.php?a_id=2&l_id=".concat(option), true);
        xmlhttp.send();
document.getElementById('l'.concat(option)).src='images/light-on-r.gif';
}
function lightoff(option){
	
             var xmlhttp = new XMLHttpRequest();
             xmlhttp.onreadystatechange = function() {
             if (this.readyState == 4 && this.status == 200) {
                document.getElementById("testing").innerHTML = xmlhttp.responseText;
             }
        };
        xmlhttp.open("GET", "lightoff.php?a_id=2&l_id=".concat(option), true);
        xmlhttp.send();
        document.getElementById("l".concat(option)).src='images/light-off-r.png';	
}

</script>
<script>
function fanon(option){
		
             
             
			 var xmlhttp = new XMLHttpRequest();
             xmlhttp.onreadystatechange = function() {
             if (this.readyState == 4 && this.status == 200) {
                document.getElementById("testing").innerHTML = xmlhttp.responseText;
             }
        };
        xmlhttp.open("GET", "fanon.php?a_id=2&f_id=".concat(option), true);
        xmlhttp.send();
document.getElementById('fan'.concat(option)).src='images/state1.gif';
}
function fanoff(option){
	
             var xmlhttp = new XMLHttpRequest();
             xmlhttp.onreadystatechange = function() {
             if (this.readyState == 4 && this.status == 200) {
                document.getElementById("testing").innerHTML = xmlhttp.responseText;
             }
        };
        xmlhttp.open("GET", "fanoff.php?a_id=2&f_id=".concat(option), true);
        xmlhttp.send();
        document.getElementById("fan".concat(option)).src='images/state0.png';	
}

</script>
<script>
var x="";
x="<?php
include('config.php');
try{
		
	
	foreach($conn->query('SELECT * FROM lightstate') as $row) {
    echo $row['l1'].' '.$row['l2'].' '.$row['l3'].' '.$row['l4'];
	
}
	
	}
	
	catch(PDOException $e)
    {
    echo 'Error: ' . $e->getMessage();
    }
?>";
if(x.charAt(5)=='1')
{
	//document.getElementById('l1').src="images/light-on-r.png";
	lighton(1);
}
else
{
	lightoff(1);
	//document.getElementById('l1').src="images/light-off-r.png";
}
if(x.charAt(7)=='1')
{
	lighton(2);
	//document.getElementById('l2').src="images/light-on-r.png";
}
else
{
	lightoff(2);
	//document.getElementById('l2').src="images/light-off-r.png";
}
</script>
<script>
var y="";
y="<?php
include('config.php');
try{
		
	
	foreach($conn->query('SELECT * FROM fanstate') as $row) {
    echo $row['f1'].' '.$row['f2'].' '.$row['f3'].' '.$row['f4'];
	
}
	
	}
	
	catch(PDOException $e)
    {
    echo 'Error: ' . $e->getMessage();
    }
?>";
if(y.charAt(5)=='1')
{
	fanon(3);
}
else
{
	fanoff(3);
}
if(y.charAt(7)=='1')
{
	fanon(4);
}
else
{
	fanoff(4);
}
</script>
<script>
function allon(){var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function(){
if (this.readyState == 4 && this.status == 200) {
document.getElementById("testing").innerHTML = xmlhttp.responseText;
}
};
xmlhttp.open("GET", "allon.php?a_id=2", true);
xmlhttp.send();
document.getElementById('l1').src='images/light-on-r.gif';
document.getElementById('l2').src='images/light-on-r.gif';
document.getElementById('fan3').src='images/state1.gif';
document.getElementById('fan4').src='images/state1.gif';
}
function alloff(){var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function(){
if (this.readyState == 4 && this.status == 200) {
document.getElementById("testing").innerHTML = xmlhttp.responseText;
}
};
xmlhttp.open("GET", "alloff.php?a_id=2", true);
xmlhttp.send();
document.getElementById('l1').src='images/light-off-r.png';
document.getElementById('l2').src='images/light-off-r.png';
document.getElementById('fan3').src='images/state0.png';
document.getElementById('fan4').src='images/state0.png';
}
</script>
</script>
</script>
</script>
</script>
</script>
<p style="visibility:hidden" id="testing">ok!</p>
<footer class="container-fluid text-center">
  <p>Powered By - <strong>Patuakhali Science & Technology University</strong></p>
</footer>
</body>
</html>
