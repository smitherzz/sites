<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1);
include_once "classes/Page_Data.class.php";

echo "BMI: " . ($_POST['weight'] * $_POST['height']);

$page = include_once "weightCalculator.php";
echo $page;

// $formIsSubmitted = isset( $_POST['user-submitted'];
// if ($formIsSubmitted){
  // $user[0] = $_POST['user-submitted'];
  // $output = showBMI($weight);
// } else {
  // $output = include_once "weightCalculator.php";
// }

// return $output;

// function showBMI($weight){
  // $bmi = $this / (2 * $height
