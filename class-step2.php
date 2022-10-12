<<<<<<< HEAD
<?php

require_once("Template.php");

session_start();
$_SESSION['error'] = array();
unset($_SESSION['chosenClass']);

if (!isset($_POST['class'])) {
  $_SESSION['error'][] = "Please choose a class";
} else {
  foreach ($_SESSION['classInfo'] as $classDetail) {
    if ($_POST['class'] == $classDetail['classId']) {
      $_SESSION['chosenClass'] = $classDetail;
    }
  }
}

/*  
* If something went wrong above, 
* such as not completing the form
* or the class not being found
* redirect the user back to step 1.
* The isset() for chosenClass should not 
* be needed for this specific (simple) case.
* But it's a good habit to prevent
* wonky errors later.  Because... Internet.
*/
if (count($_SESSION['error']) > 0 || !isset($_SESSION['chosenClass'])) {
  die(header("Location: class-step1.php"));
} 

$page = new Template("My Page");

$page->finalizeTopSection();
$page->finalizeBottomSection();

print $page->getTopSection(); 

print "\t<h1>Please confirm your class</h1>\n";
print "\t<div>You have chosen ";
print $_SESSION['chosenClass']['classCode'] . " " . $_SESSION['chosenClass']['classNum'] . ": " . 
      $_SESSION['chosenClass']['className'] .
      " meeting on " . 
      $_SESSION['chosenClass']['meetingTime'] . 
      " with Professor " . 
      $_SESSION['chosenClass']['instructor'] . 
      "</div>\n";
print "\t<br><a href=\"class-step3.php\">" .
      "Click here to confirm your choice and enroll." .
      "</a>\n";
print "\t<br><a href=\"class-step1.php\">" .
      "Click here to go back and choose again." .
      "</a>\n";
print "</body>\n";
print "</html>\n";
print $page->getBottomSection();
=======

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
>>>>>>> f6092e4145709284f3dafcc471335ce7b281683a
