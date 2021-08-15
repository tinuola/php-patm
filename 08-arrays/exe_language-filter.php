<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Language Filter</title>
</head>
<body>
  <!-- Challenge
  Create a HTML form which allows the user to input a string of text.
  Send this text to a processing script that will search through the text and replace any inappropriate words with ****
  -->

  <h3>Mind Your Language!</h3>
  <form action="exe_lang-processor.php" method="post">
    Enter sentence to be screened or filtered:<br>
    <input type="text" name="sentence">
    <br><br>
    <input type="submit" name="submit" value="Clean it up!">
  </form>

</body>
</html>