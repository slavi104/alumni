<?php
	require_once "controller.php";

	//fwefwe
	if (isset($_POST["points"])) {
		$newPoints = (int)$_POST["points"];
		$allPoints = 0;
		try
	    {   
	        $user = new User(array("id" => $id));
	        
	    } catch (fExpectedException $e) 
	    {
	        echo '0';
	        die();
	    }
	    $allPoints = (int)$user->getScore() + $newPoints;
	    $user->setScore($allPoints);
	    $user->store();
	    echo '1';
	}
	

?>