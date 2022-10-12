<?php

session_start();

$_SESSION['firstVisit'] = (date("Y-m-d H:i:s", $_SERVER['REQUEST_TIME']);

if (isset($_SERVER['REQUEST_TIME'])){
		$_SESSION['firstVisit'];
}	
	print ("The current time on the server is: "). $_SESSION['firstVisit'];

echo '<br></br><a href="sessionlab2.php">Go to Page 2</a>.';

?>