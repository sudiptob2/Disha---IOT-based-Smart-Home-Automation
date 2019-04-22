<?php
include('config.php');

if(isset($_REQUEST['a_id'])){	
        shell_exec("sudo python /var/www/html/arduino".$_REQUEST['a_id']."-b1-off.py"); 
        shell_exec("sudo python /var/www/html/arduino".$_REQUEST['a_id']."-b2-off.py"); 
        shell_exec("sudo python /var/www/html/arduino".$_REQUEST['a_id']."-b3-off.py"); 
        shell_exec("sudo python /var/www/html/arduino".$_REQUEST['a_id']."-b4-off.py"); 
        echo "alright";		


	try{
    $stmt;		
	$s=$_REQUEST['a_id'];
	if($s==1)
	{
		$stmt = $conn->prepare("UPDATE lightstate SET l1=0,l2=0 WHERE ID=1");
	
	}
	else{
		$stmt = $conn->prepare("UPDATE lightstate SET l3=0,l4=0 WHERE ID=1");
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
		$stmt = $conn->prepare("UPDATE fanstate SET f1=0,f2=0 WHERE ID=1");
	
	}
	else{
		$stmt = $conn->prepare("UPDATE fanstate SET f3=0,f4=0 WHERE ID=1");
	}
	
	$stmt->execute();
	}
	catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }

}

?>