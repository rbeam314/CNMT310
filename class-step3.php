<?php
<<<<<<< HEAD

require_once("Template.php");

session_start();
$_SESSION['error'] = array();

if (!isset($_SESSION['chosenClass'])) {
  $_SESSION['error'][] = "Something has gone wrong, class not found";
  die(header("Location: class-step1.php"));
}  
$page = new Template("My Page");

$page->finalizeTopSection();
$page->finalizeBottomSection();

print $page->getTopSection(); 

print "<h1>Class Confirmed</h1>";
print "<div>You are enrolled in ";
print $_SESSION['chosenClass']['classCode'] . " " . 
      $_SESSION['chosenClass']['classNum'] . ": " . $_SESSION['chosenClass']['className'] .
      " meeting on " . $_SESSION['chosenClass']['meetingTime'] . " with Professor " . 
      $_SESSION['chosenClass']['instructor'] . "</div><br />";
print "<a href=\"class-step1.php\">Click here to start over.</a>\n";
print "</body></html>\n";
print $page->getBottomSection();
=======
print "<!doctype html>\n";
print "<html lang=\"en\">\n";
print "<head>\n";
print "\t<title>Class Confirmed - Step 3 of 3</title>\n";
print "</head>\n";
print "<body>\n";

print "\t<h1>Class Confirmed</h1>\n";
print "<div>";
	
print "</div>"; 

print "</body>\n";
print "</html>\n";

print "<br></br><a href=\"class-step1.php\"> Click here to start over. </a> \n";
>>>>>>> f6092e4145709284f3dafcc471335ce7b281683a
