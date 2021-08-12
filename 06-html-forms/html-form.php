<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HTML Form-</title>
</head>
<body>
  <!-- Using a HTML form and sending data to a PHP script. -->
  <form action="html-form-processor.php" method="post">
    <input type="text" name="lastname" placeholder="Last Name">
    Male <input type="radio" name="gender" value="male">
    Female <input type="radio" name="gender" value="female">
    <input type="submit" name="submit">
  </form>
</body>
</html>