<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Factorial</title>
</head>

<body>
  <h1>Factorial</h1>

  <?php
  $n = 6;
  $f = 1;

  for ($i = $n; $i >= 1; $i--) {
    $f *= $i;
  }

  echo "{$n}! = $f";
  ?>
</body>

</html>