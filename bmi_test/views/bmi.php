<?php
$bmiIsSubmitted = isset($_POST['bmi-submitted']);

if ($bmiIsSubmitted){
  $weight = $_POST['weight'];
  $height = $_POST['height'];
  $output = calculateBMI($weight, $height);
} else {
  $output = include_once "views/bmi-calculator.php";
}

return $output;

function calculateBMI($weight, $height) {
  $response = "<p>Your weight is $weight, and your height is $height</p>";
  $answer = $weight / (2 * $height);
  $response = "<p>Your BMI is: $answer</p>";
  return $response;
}
