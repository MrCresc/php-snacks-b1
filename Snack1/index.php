<?php
  $arrayPartite = [
    [
      'team1' => 'Ferrari',
      'team2' => 'McLaren',
      'punteggio' => '1-0'
    ],
    [
      'team1' => 'Williams',
      'team2' => 'BAR',
      'punteggio' => '2-0'
    ],
    [
      'team1' => 'Jordan',
      'team2' => 'Jaguar',
      'punteggio' => '1-0'
    ],
    [
      'team1' => 'Sauber',
      'team2' => 'Arrows',
      'punteggio' => '3-3'
    ]
  ];

  $stringa = '';
  for ($i=0; $i < count($arrayPartite); $i++) {
    $thisPartita = $arrayPartite[$i];
    $stringa.= '<li>'.$thisPartita['team1'].' - '.$thisPartita['team2'].' | '.$thisPartita['punteggio'].'</li>';
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
