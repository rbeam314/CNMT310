<?php
require_once("StudentData.php");
require_once("ClassData.php");

session_start();

$studentdata2 = New StudentData();

$_SESSION['errorMessage']= '';

if(!isset($_POST['class']))
{
	$_SESSION['errorMessage'] = 'Please pick a class.';
	die(header('Location: Registration2.php'));
}



$_SESSION['major'] = $studentdata2->getStudentById($_POST['studentNum'])['studentMajor'];

die(header('Location: Registration3.php'));