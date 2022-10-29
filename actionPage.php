<?php
require_once("StudentData.php");
require_once("ClassData.php");

session_start();

$studentdata = New StudentData();

$_SESSION['errorMessage']= '';

if(!isset($_POST['studentNum']))
{
    $_SESSION['errorMessage'] = 'Please set a student ID number.';
	die(header('Location: RegistrationForm.php'));
}

if(!is_numeric($_POST['studentNum']))
{
    $_SESSION['errorMessage'] = 'Please enter a NUMBER for the Student ID number.';
	die(header('Location: RegistrationForm.php'));
}

if($studentdata->getStudentById($_POST['studentNum']) === false)
{
    $_SESSION['errorMessage'] = 'Student ID is not valid.';
    die(header('Location: RegistrationForm.php'));
}

$_SESSION['major'] = $studentdata->getStudentById($_POST['studentNum'])['studentMajor'];

die(header('Location: Registration2.php'));