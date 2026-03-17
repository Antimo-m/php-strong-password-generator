<?php
// Leggiamo la password dal parametro GET
$password = isset($_GET['password']) ? $_GET['password'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La tua password</title>
</head>
<body>

  <h1>Password Generata</h1>

  <p>La tua password è : <?php  echo $password ?></p>
    <a href="index.php">torna a generare un'altra password</a>
</body>
</html>