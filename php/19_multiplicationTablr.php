<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multiplication Table</title>
</head>

<body>
  <h1>Multiplication Table</h1>

  <?php
  $n = 7;
  $prod;

  for ($i = 1; $i <= 10; $i++) {
    $prod = $n * $i;
    echo "{$n} * {$i} = {$prod} <br>";
  }
  ?>
</body>

</html>