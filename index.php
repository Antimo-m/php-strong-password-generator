<?php
session_start();
include_once "./functions.php";

$error = null;

// Se l'utente ha inviato il form
if (isset($_GET['pass'])) {
    $pass = intval($_GET['pass']);
    $lowercase = isset($_GET['lowercase']);
    $uppercase = isset($_GET['uppercase']);
    $numbers   = isset($_GET['numbers']);
    $symbols   = isset($_GET['symbols']);

    if ($pass < 6) {
        $error = "La tua password deve essere di almeno 6 caratteri";
    } elseif (!$lowercase && !$uppercase && !$numbers && !$symbols) {
        $error = "Seleziona almeno un tipo di carattere";
    } else {
        $passwordGenerata = generapassword($pass,  $lowercase, $uppercase, $numbers, $symbols);
        $_SESSION['password'] = $passwordGenerata; // salvo nella sessione
        header("Location: risultato.php"); // redirect 
        exit;
    }
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <style>
        h1 {
            font-family: 'Poppins', sans-serif;
        }
    </style>
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
                placeholder="Minimo 6 (es: 10)"
                class="form-control mb-3 w-50 text-center"
                type="number"
                min="6"
                id="pass"
                name="pass">

            <div class="mb-3 w-100 text-start">

                <label class="form-label">Scegli cosa includere:</label>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="lowercase" checked>
                    <label class="form-check-label">Lettere minuscole</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="uppercase">
                    <label class="form-check-label">Lettere maiuscole</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="numbers">
                    <label class="form-check-label">Numeri</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="symbols">
                    <label class="form-check-label">Simboli</label>
                </div>

            </div>

            <button type="submit" class="btn btn-outline-primary">
                Genera password
            </button>

        </form>
    </div>

    <!-- //stampiamo l'alert di errore se non vengono inseriti i filtri oppure se la pass non arriva ad una lunghezza minima di 6 -->
    <?php if ($error): ?>
        <div id="error-alert" class="alert alert-danger mt-3 w-50 mx-auto text-center" role="alert">
            <?php echo $error; ?>
        </div>
    <?php endif; ?>



    <script>
        const alertEl = document.getElementById('error-alert');
        if (alertEl) {
            setTimeout(() => {
                alertEl.style.display = 'none';
            }, 3000); 
        } //vado a utilizzare js cosi da rimuovere l'alert dopo qualche secondo
    </script>
</body>

</html>