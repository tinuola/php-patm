<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- Challenge -->
  <p>Design a form that will allow a user to input a string. Take the user input and count the number of characters in the string. Output the length of the string.</p>
  
  <p>BONUS: Add radio button elements to the form that will allow the user to select if they wish to count the spaces in the string along with the other characters. Process the form taking into account whether or not they wish to count the spaces.</p>

  <hr>

  <form action="string-processor.php" method="post">
    Enter your string statement: 
    <input type="text" name="user_input" value="">
    <br><br>
    When counting: 
    Include spaces <input type="radio" name="spacing" value="yes_space">
    Exclude spaces <input type="radio" name="spacing" value="no_space">
    <br><br>
    <input type="submit" value="Count It!">
  </form>

</body>
</html>

