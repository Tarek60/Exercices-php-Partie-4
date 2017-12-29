<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercice 8</title>
  </head>
  <body>
    <?php
function myFunction($number1 = 10 , $number2 = 20 , $number3 = 30){
  $result = $number1 + $number2 + $number3;
  return $result;
}
echo myFunction();
     ?>
  </body>
</html>
