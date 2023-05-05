<DOCTYPE html>
<html lang="en-ca">
  <head>

    <!--Meta data-->
    <meta charset="utf-8">
    <meta name="description" content="Number Display webpage">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Lily C">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">

    <!--Stylesheet CSS-->
    <link rel="stylesheet" href="./css/style.css">

    <!--MDL theme-->
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.grey-red.min.css" />

    <!--Title-->
    <title>Number Display Webpage</title>
  </head>
  <body>

    <!--Header-->
    <?php echo "<h1>Number Display Webpage, with PHP</h1>"; ?>

    <!--Text-->
    <?php echo "<h3>Welcome to my number display webpage!</h3>" ; ?>
  <center>
    <?php echo "<p>My webpage allows you to choose a mininmun number and a maxiumnm number and determine the range of numbers between your input.</p>"; ?>
  </center>
    <?php echo "<h3>Please enter your input below:</h3>"; ?>

    <!--Form for user input-->
    <form action="./calculations.php" method="post" target="results">
      <label for="min number">Enter a minimum number:</label>
      <input type="number" step="1" name="min-number" placeholder="Minimum">
      <br>
      <br>
        <label for="max number">Enter a maximum number:</label>
        <input type="number" step="1" name="max-number" placeholder="Maximum">
      <br>
      <br>

    <!--Adding id to submit button to style button-->
      <input type="submit" id="submit" value="Submit" button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
      <br>
      <br>

    <!--Iframe to display results-->
    <iframe id="results" name="results"></iframe>
      <br>
      <br>

    <!--Image-->
      <center>
    <img src="./images/randomNumbers.png" alt="Numbers" width="400" length="400"/>
      </center>
    </form>
  </body>
</html>