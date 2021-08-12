<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Temperature Converter</title>
</head>
<body>

  <!-- Challenge -->
  <!--  -->

  <form action="temp-converter-processor.php" method="post">

    <!-- Get temperature -->
    <label for="temperature-value">Enter the temperature:</label>
    <input type="text" name="temperature-value" placeholder="Integers only...">
    <br><br>

    <!-- Select celcius or fahrenheit -->
    Celcius <input type="radio" name="temperature-unit" value="celcius">
    Fahrenheit <input type="radio" name="temperature-unit" value="fahrenheit">
    <br><br>

    <!-- Select degree of accuracy -->
    <label for="degree-accuracy">Select degree of accuracy</label>
    <select name="degree-accuracy">
      <option value="whole-number">Whole Number</option>
      <option value="one-decimal">1 Decimal Place</option>
      <option value="two-decimal">2 Decimal Places</option>
    </select>
    <br><br>

    <!-- Submit -->
    <input type="submit" value="Submit">

  </form>

</body>
</html>