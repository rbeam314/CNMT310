<?php

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