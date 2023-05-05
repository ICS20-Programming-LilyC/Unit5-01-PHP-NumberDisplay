<?php

  // Establishing empty variables for numbers and messages (for later).
$numbers = "";
$message = "";

  // Getting the minimum and maximum input.
$minNumber = intval($_POST["min-number"]);
$maxNumber = intval($_POST["max-number"]);

  // Initializing counter variable to minNumber.
$counter = $minNumber;

  // If statement to make sure that maximum is greater than minimum.
if ($minNumber > $maxNumber) {
  $message = "Please make sure that your minimum value is less than or equal to your maximum value.";
}
  
  // Else, make a list of numbers.
  else {

  // While loop that provides the range of numbers determined by the user.
  while (($counter >= $minNumber) && ($counter <= $maxNumber)) {
    
    // List of numbers with a break.
    $numbers = $numbers . $counter . "<br>";

    // Creating an increment for counter the variable.
    $counter++;

    // Setting the message variable to display results
    $message = "Below are all the numbers between your minimum and your maximum numbers that you entered:<br><br>" . $numbers;
  }
}

  // Displaying the results (the range of numbers) back to the user.
echo $message;

?>