<?php

$classInfo = array( 
              array("classId" => "039821",
                    "className" => "Production Programming",
                    "classCode" => "CNMT",
                    "classNum" => "310",
                    "instructor" => "Suehring",
                    "meetingTime" => "MW 10:00-11:50"),
              array("classId" => "90125",
                    "className" => "Podcasting",
                    "classCode" => "MSTU",
                    "classNum" => "299",
                    "instructor" => "Ingersoll",
                    "meetingTime" => "MTR 13:00-13:50"),
              array("classId" => "5150",
                    "className" => "Percussive Maintenance",
                    "classCode" => "FAC",
                    "classNum" => "433",
                    "instructor" => "Van Halen",
                    "meetingTime" => "M 18:00-20:30"),
            );

session_start();
$_SESSION['chosenClass'] = "";
$_SESSION['confirmed'] = false;
unset($_SESSION['chosenClass']);
$_SESSION['classInfo'] = $classInfo; //class info session variable pg.2 var dump session. Show everything in session

print "<!doctype html>\n";
print "<html lang=\"en\">\n";
print "<head>\n";
print "\t<title>Class Picker - Step 1 of 3</title>\n";
print "</head>\n";
print "<body>\n";
print "\t<h1>Class Picker - Step 1 of 3</h1>\n";
print "\t<form action=\"class-step2.php\" method=\"POST\">\n";
if (isset($_SESSION['error']) && is_array($_SESSION['error']) && count($_SESSION['error']) > 0) { //will loop through each one of the errors
  foreach ($_SESSION['error'] as $err => $errMsg) {
    print "\t\t<div class=\"error\">" . $errMsg . "</div>\n";
  }
  $_SESSION['error'] = array();
}
foreach ($classInfo as $classDetail) {
  print "\t\t<input type=\"radio\" name=\"class\" value=\"" . $classDetail['classId'] . "\">" .
        $classDetail['classCode'] . " " . $classDetail['classNum'] . ": " . $classDetail['className'] . "<br>\n";
}
print "\t\t<div>\n";
print "\t\t\t<input href=\"class-step2.php\" type=\"submit\" name=\"submitform\" value=\"Proceed\">\n";
print "\t\t</div>\n";
print "\t</form>\n";
print "</body>\n";
print "</html>\n";
