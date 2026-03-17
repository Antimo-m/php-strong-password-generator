<?php
// Leggiamo la password dal parametro GET
$password = isset($_GET['password']) ? $_GET['password'] : '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
  <title>La tua password</title>
  <style>
    h1 {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>

<body class="d-flex flex-column align-items-center bg-light pt-5">

  <h1 class="text-warning text-center mb-4">Password Generata</h1>

  <div class="border rounded-4 p-5 shadow bg-white text-center" style="max-width: 500px; width: 100%;">
    <p class="mb-4">La tua password è : </p>
    <div class="bg-light border rounded-3 p-3 mb-4">
      <strong class="fs-4 text-primary">
        <?php echo $password ?>
      </strong>
    </div>

    <a class="btn btn-outline-secondary" href="index.php">torna a generare un'altra password</a>
  </div>
</body>
</html>