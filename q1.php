<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Caluculator</title>
  </head>
  <body>
    <form method="post">
      <label>First Number:</label>
      <input type="number" name="num1" id="num1" value=""><br>
      <br>
      <label>Second Number:</label>
      <input type="number" name="num2" id="num2" value=""><br>
      <br>
      <label>Result:</label>
      <input type="number" id="result" value="" disabled>
      <br>
      <br>
      <input type="submit" name="operator" value="Add">
      <input type="submit" name="operator" value="Sub">
      <input type="submit" name="operator" value="Mul">
      <input type="submit" name="operator" value="Div">
    </form>
  </body>
</html>

<?php

$x=$_post['num1'];
$y=$_post['num2'];
$z=$_post['result'];


 ?>
