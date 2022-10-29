<?php

require_once("Template.php");
require_once("StudentData.php");
require_once("ClassData.php");

session_start();

$page = new Template("My Page");

$page->finalizeTopSection();
$page->finalizeBottomSection();

print $page->getTopSection(); 

if(!isset($_SESSION["errorMessage"])){
	$_SESSION["errorMessage"]='';
};

?>
<div>
<title>Class Registration</title>

<form method="POST" action="actionPage.php">
	<h1>Class registration</h1>
	
	<div>
		<?php
		echo $_SESSION["errorMessage"];
		?>
	</div>
	
	<label>Please enter your student ID</label>
	<input type="number" id="studentNum" name="studentNum">
	
	<button type="submit"> Submit </button>

</form>
</div>

<?php
print $page->getBottomSection();