<?php
error_reporting( E_ALL );
ini_set ( "display_errors" , 1 );

$pageData = new stdClass();
$pageData->title = "Thomas Blom Hansen: Portfolio site";
$pageData->content = include_once "views/navigation.php";
$page = include_once "templates/page.php";

echo $page;











