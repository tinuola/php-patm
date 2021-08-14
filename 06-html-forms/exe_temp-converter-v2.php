<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Temperature Converter</title>
</head>
<body>
  <h3>Temperature Converter (Refactored)</h3>
  <form action="temp-processor-v2.php" method="post">

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
      <option value="0">Whole Number</option>
      <option value="1">1 Decimal Place</option>
      <option value="2">2 Decimal Places</option>
      <option value="3">3 Decimal Places</option>
    </select>
    <br><br>

    <!-- Submit -->
    <input type="submit" name="submit" value="CONVERT">

  </form>

</body>
</html>