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
  <h3>Temperature Converter</h3>
  <form action="temp-processor.php" method="post">

    <!-- Get temperature -->
    <label for="temperature_value">Enter the temperature:</label>
    <input type="text" name="temperature_value" placeholder="Positive integers only...">
    <br>

    <!-- Select celcius or fahrenheit -->
    <p>Unit to convert from is:</p>
    Celcius <input type="radio" name="temperature_unit" value="celcius">
    Fahrenheit <input type="radio" name="temperature_unit" value="fahrenheit">
    <br><br>

    <!-- Select degree of accuracy -->
    <label for="degree_accuracy">Select degree of accuracy</label>
    <select name="degree_accuracy">
      <option value="whole_number">Whole Number</option>
      <option value="one_decimal">1 Decimal Place</option>
      <!-- <option value="two_decimal">2 Decimal Places</option> -->
    </select>
    <br><br>

    <!-- Submit -->
    <input type="submit" name="submit" value="CONVERT">

  </form>

</body>
</html>