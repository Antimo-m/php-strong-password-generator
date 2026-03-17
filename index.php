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

<body class="d-flex flex-column align-items-center bg-light pt-5">

    <h1 class="text-warning text-center mb-4">
        Genera la tua password in maniera casuale
    </h1>

    <div class="border rounded-4 p-5 shadow bg-white d-flex justify-content-center"
        style="max-width: 500px; width: 100%;">

        <form action="" method="get" class="d-flex flex-column align-items-center w-100">

            <label for="pass" class="mb-3 text-center">
                Inserisci la lunghezza della password che desideri
            </label>

            <input
                placeholder="Es: 10"
                class="form-control mb-3 w-50 text-center"
                type="number"
                min="1"
                id="pass"
                name="pass">

            <button type="submit" class="btn btn-outline-primary">
                Genera password
            </button>

        </form>
    </div>

</body>

</html>