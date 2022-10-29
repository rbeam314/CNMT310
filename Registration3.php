<?php
require_once('Template.php');
require_once('StudentData.php');
require_once('ClassData.php');

session_start();

$page = new Template("My Page");

$page->finalizeTopSection();
$page->finalizeBottomSection();

print $page->getTopSection();

$student_data = new StudentData();
$class_data = new ClassData();



?>
	<h1>Class Confirmed</h1><br></br>
	<h3>You are enrolled in:</h3>
	<?php
	print $_SESSION['class_data']['classCode'] . " " . 
      $_SESSION['class_data']['classNum'] . ": " . $_SESSION['class_data']['className'] .
      " meeting on " . $_SESSION['class_data'] . ['meetingTime'] . " with Professor " . 
      $_SESSION['class_data']['instructor'] . "</div><br />";
	print $page->getBottomSection();
	?>
<form>
	<a href="RegistrationForm.php"> Click here to start over. </a>
</form>