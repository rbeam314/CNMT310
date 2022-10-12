<?php

session_start();

<<<<<<< HEAD
$_SESSION['firstVisit'] = (date("Y-m-d H:i:s", $_SERVER['REQUEST_TIME']);
=======
$_SESSION['firstVisit'] = (date("Y-m-d H:i:s", $_SERVER['REQUEST_TIME']));
>>>>>>> f6092e4145709284f3dafcc471335ce7b281683a

if (isset($_SERVER['REQUEST_TIME'])){
		$_SESSION['firstVisit'];
}	
	print ("The current time on the server is: "). $_SESSION['firstVisit'];

echo '<br></br><a href="sessionlab2.php">Go to Page 2</a>.';

?>