<?php
include_once "./functions.php";

// Se l'utente ha inviato il form
if (isset($_GET['pass']) && intval($_GET['pass']) > 0) {
    $pass = intval($_GET['pass']);
    $passwordGenerata = generapassword($pass);
    header("Location: risultato.php?password=" . urlencode($passwordGenerata));
    exit; // fermiamo l'esecuzione dopo il redirect
}

// Se il form non è stato inviato, $pass può avere un valore di default per il form
$pass = isset($_GET['pass']) ? intval($_GET['pass']) : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genera Password</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <h1 class="text-center py-5">Genera la tua password in maniera casuale</h1>

    <form action="" method="get" class="text-center flex-cloumn">
        <label for="pass" class="text-danger">Inserisci la lunghezza della password che desideri</label>
        <input placeholder=" ES: 10" class="" type="number" min="1" id="pass" name="pass">
        <button type="submit" class="btn btn-outline-primary">Genera password</button>
    </form>
</body>

</html>