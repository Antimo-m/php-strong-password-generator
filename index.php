 <?php
 include_once "./functions.php"
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