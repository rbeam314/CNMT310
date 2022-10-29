<?php
require_once('Template.php');
require_once('StudentData.php');
require_once('ClassData.php');

session_start();

$page = new Template("My Page");

$page->finalizeTopSection();
$page->finalizeBottomSection();

print $page->getTopSection(); 

if(!isset($_SESSION["errorMessage"])){
	$_SESSION["errorMessage"]='';
};

$student_data = new StudentData();
$class_data = new ClassData();

if($_SESSION['major'] === 'NONE')
{
    $classes = $class_data->getClassList();
}
else
{
    $classes = $class_data->getClassByMajor($_SESSION['major']);
}

function print_radio_buttons($classes)
{
    foreach($classes as $class)
    {
		echo "\n <input type=\"radio\" name=\"class\" value=\"" . $class['classId'] . "\">" . 
		$class['classCode'] . " " . $class['classNum'] . ":" . $class['className'] . "<br>\n";
	}
}

?>
<form method="POST" action="actionPage2.php">
	<label>Choose a class from the list below</label> 
	<br></br>
	<div>
		<?php
		echo $_SESSION["errorMessage"];
		?>
	</div>
    <?php
    print_radio_buttons($classes);
	print $page->getBottomSection();
    ?>
	<br></br>
	<button type="submit"> Confirm your choice </button><br></br>
	<a href="RegistrationForm.php"> Click here to go back and choose again. </a>
</form>