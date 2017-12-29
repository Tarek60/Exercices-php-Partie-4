<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercice 7</title>
  </head>
  <body>
    <?php
function myFunction($age , $gender) {
  if ($age >= 18 && $gender == 'homme') {
    print 'Vous êtes un homme et vous êtes majeur';
  }
  elseif ($age < 18 && $gender == 'homme') {
    print 'Vous êtes un homme et vous êtes mineur';
  }
  elseif ($age >= 18 && $gender == 'femme') {
    print 'Vous êtes une femme et vous êtes majeur';
  }
  elseif ($age < 18 && $gender == 'femme') {
    print 'Vous êtes une femme et vous êtes mineur';
  }
}
myFunction(15 , 'femme');
     ?>
  </body>
</html>
