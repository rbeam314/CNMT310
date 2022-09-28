<?php
if (!isset($_POST)){
	die(header("Location: pizza-step1.php"));
}

$required = array("type",
				  "quantity", 
				  "size",
				  );
			
foreach ($required as $reg) {
	if (!isset($_POST[$reg]) || empty($_POST[$reg])){
		die(header("Location: form.html?error=true"));
	}
}
?>