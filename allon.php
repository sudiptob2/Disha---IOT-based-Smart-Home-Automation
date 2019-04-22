<?php
include('config.php');

if(isset($_REQUEST['a_id'])){	
        shell_exec("sudo python /var/www/html/arduino".$_REQUEST['a_id']."-b1-on.py"); 
        shell_exec("sudo python /var/www/html/arduino".$_REQUEST['a_id']."-b2-on.py"); 
        shell_exec("sudo python /var/www/html/arduino".$_REQUEST['a_id']."-b3-on.py"); 
        shell_exec("sudo python /var/www/html/arduino".$_REQUEST['a_id']."-b4-on.py"); 
        echo "alright";		


	try{
    $stmt;		
	$s=$_REQUEST['a_id'];
	if($s==1)
	{
		$stmt = $conn->prepare("UPDATE lightstate SET l1=1,l2=1 WHERE ID=1");
	
	}
	else{
		$stmt = $conn->prepare("UPDATE lightstate SET l3=1,l4=1 WHERE ID=1");
	}
	
	$stmt->execute();
	}
	catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
	try{
	if($s==1)
	{
		$stmt = $conn->prepare("UPDATE fanstate SET f1=1,f2=1 WHERE ID=1");
	
	}
	else{
		$stmt = $conn->prepare("UPDATE fanstate SET f3=1,f4=1 WHERE ID=1");
	}
	
	$stmt->execute();
	}
	catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }

}

?>