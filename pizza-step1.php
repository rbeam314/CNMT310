<?php
print"<html>";

print"<head>";
	print"<title>PHP Form Lab</title>";
print"</head>";

print"<body>";

print '<form action=\"pizza-step1.php\" method="POST">';
	print'<label> Pizza Type </label><br></br>';
	print'<input id="cheese" type="radio" name="type"><br></br>';
	print'<input id="veggie" type="radio" name="type"><br></br>';
	print'<input id="supreme" type="radio" name="type"><br></br>';
	print'<label> Quantity </label><br></br>';
	print'<input type="text" name="quantity"><br></br>';
	print'<input id="small" type="radio" name="size"><br></br>';
	print'<input id="medium" type="radio" name="size"><br></br>';
	print'<input id="large" type="radio" name="size"><br></br>';
	print'<button type="submit" > Continue </button>';
print '</form>'1;
print"</body>";

print"</html>";
?>