<?php
  $name = $_GET['name'];
  $mail = $_GET['mail'];
  $age = $_GET['age'];

  if (empty($name) || empty($mail) || empty($age)) {
    $stringa = 'Accesso negato (nessun valore immesso)';
  } elseif (strlen($name) <= 3) {
    $stringa = 'Accesso negato (nome inferiore a 3 caratteri)';
  } elseif (strpos($mail,'@') === false || strpos($mail,'.') === false) {
    $stringa = 'Accesso negato (verificare la presenza della "@" o del ".")';
  } elseif (!is_numeric($age)) {
    $stringa = 'Accesso negato (il numero non è valido)';
  } else {
    $stringa = 'Accesso riuscito';
  } 
?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body>
      <ul>
        <?php echo $stringa ?>
      </ul>
    </body>
  </html>
