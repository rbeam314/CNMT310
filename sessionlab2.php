<?php

session_start();

if(!isset($_SESSION['firstVisit'])){
    die(header("Location: sessionlab.php"));
}

	print ("You first visited at "). $_SESSION['firstVisit'];
	
<<<<<<< HEAD
	$_SESSION['secondVisit'] = ($_SERVER['REQUEST_TIME']);
=======
	$_SESSION['secondVisit'] = (date("Y-m-d H:i:s",$_SERVER['REQUEST_TIME']));
>>>>>>> f6092e4145709284f3dafcc471335ce7b281683a

if (isset($_SERVER['REQUEST_TIME'])){
		$_SESSION['secondVisit'];
}	
	print (" and it is now "). $_SESSION['secondVisit'];
	
echo '<br></br><a href="sessionlab.php">Start Over</a>.';

?>