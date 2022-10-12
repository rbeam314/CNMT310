<?php

session_start();

if(!isset($_SESSION['firstVisit'])){
    die(header("Location: sessionlab.php"));
}

	print ("You first visited at "). $_SESSION['firstVisit'];
	
	$_SESSION['secondVisit'] = ($_SERVER['REQUEST_TIME']);

if (isset($_SERVER['REQUEST_TIME'])){
		$_SESSION['secondVisit'];
}	
	print (" and it is now "). $_SESSION['secondVisit'];
	
echo '<br></br><a href="sessionlab.php">Start Over</a>.';

?>