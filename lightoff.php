<?php
include('config.php');
if(isset($_REQUEST['l_id'])){	
        shell_exec("sudo python /var/www/html/arduino".$_REQUEST['a_id']."-b".$_REQUEST['l_id']."-off.py"); 
        echo "alright";		
	


try{
		
	
	$stmt;		
	$s=$_REQUEST['a_id'];
	$t=$_REQUEST['l_id'];
	if($s==1)
	{
		$stmt = $conn->prepare("UPDATE lightstate SET l".$t."=0 WHERE ID=1");
	
	}
	else{
		$t=$t+2;
		$stmt = $conn->prepare("UPDATE lightstate SET l".$t."=0 WHERE ID=1");
	}
	
	$stmt->execute();
	}
	catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
}
?>