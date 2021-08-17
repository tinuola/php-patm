<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ISBN Checker</title>
</head>
<body>
  <!-- 
  Design a HTML form to allow a user to input a 10 digit ISBN.
  Send this data to a processing script and then check if it is a valid ISBN number.
  Output a valid or invalid message to the user.
  Sample valid ISBN: 1573980137
  -->

  <h3>ISBN Checker</h3>
  <form action="exe_isbn-processor1.php" method="post">
    Enter an ISBN Number
    <input type="text" name="isbn_num">
    <br><br>
    <input type="submit" name="submit" value="Validate">
  </form>

</body>
</html>