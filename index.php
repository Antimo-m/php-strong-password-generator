 <?php
    function generapassword($pass = 12)
    {
        $minuscole = 'abcdefghijklmnopqrstuvwxyz';
        $maiuscole = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numeri = '0123456789';
        $simboli = '!@#$%^&*()-_=+[]{};:,.<>?';

        $tutti = $minuscole . $maiuscole . $numeri . $simboli;


        $password = '';
        for ($i = 0; $i < $pass; $i++) {
            $posizione = random_int(0, strlen($tutti)- 1);
            $password .= $tutti[$posizione];
        }
        return $password;
    }

    $pass = isset($_GET["pass"]) ? intval($_GET['pass']) : 12;
    $passwordGenerata = '';

    if ($pass > 0) {
        $passwordGenerata = generapassword($pass);
    }
    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>

 <body>

     <h1>Genera la tua password in maniera casuale</h1>

     <form action="" method="get">
         <label for="pass">Inserisci la lunghezza della pass che desideri</label>
         <input type="number" min="1" id="pass" name="pass" value="<?php echo $pass; ?>">
         <button type="submit">Genera password</button>
</form>

   

   <h2>Password Generata : <?php echo $passwordGenerata ?></h2>
  

 </body>
 </html>