<?php
include('config.php');
if(isset($_REQUEST['f_id'])){	
        shell_exec("sudo python /var/www/html/arduino".$_REQUEST['a_id']."-b".$_REQUEST['f_id']."-on.py"); 
        echo "alright";		
	try{
		
	$stmt;		
	$s=$_REQUEST['a_id'];
	$t=$_REQUEST['f_id'];
	if($s==1)
	{
		$t=$t-2;
		$stmt = $conn->prepare("UPDATE fanstate SET f".$t."=1 WHERE ID=1");
	
	}
	else{
		
		$stmt = $conn->prepare("UPDATE fanstate SET f".$t."=1 WHERE ID=1");
	}
	$stmt->execute();
	}
	catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }


}

?>