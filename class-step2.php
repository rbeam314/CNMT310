
<?php

session_start();

$_SESSION['error'] = array();
	
if (!isset($_POST['classInfo'])){
		$_SESSION['error'][] = "fill out the form";
		die(header("Location: class-step1.php"));
	}


foreach($_SESSION['classInfo'] as $classDetail){
	if ($_POST['classId'] == $classDetail['classId']){
		$_SESSION['chosenClass'] = $classDetail;
	}
	
}


print "<!doctype html>\n";
print "<html lang=\"en\">\n";
print "<head>\n";
print "\t<title>Confirm Class - Step 2 of 3</title>\n";
print "</head>\n";
print "<body>\n";

print "\t<h1>Please confirm your class</h1>\n";
print "<div>";
	
print "</div>"; 

print "</body>\n";
print "</html>\n";

print "\t\t\t<a href=\"class-step3.php\"> Click here to confirm your choice and enroll. </a> \n";
print "<br></br><a href=\"class-step1.php\"> Click here to go back and choose again. </a> \n";