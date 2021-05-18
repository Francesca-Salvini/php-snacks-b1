<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php

    $partite = [
        [
            'squadraCasa' => 'Milano',
            'squadraOspite' => 'Verona',
            'puntiCasa' => 58,
            'puntiOspite' => 55
        ],
        [
            'squadraCasa' => 'Torino',
            'squadraOspite' => 'Padova',
            'puntiCasa' => 64,
            'puntiOspite' => 50
        ],
        [
            'squadraCasa' => 'Roma',
            'squadraOspite' => 'Bari',
            'puntiCasa' => 45,
            'puntiOspite' => 56
        ],
        [
            'squadraCasa' => 'Trieste',
            'squadraOspite' => 'Bologna',
            'puntiCasa' => 62,
            'puntiOspite' => 60
        ],
        [
            'squadraCasa' => 'Firenze',
            'squadraOspite' => 'Napoli',
            'puntiCasa' => 51,
            'puntiOspite' => 48
        ],
        [
            'squadraCasa' => 'La Spezia',
            'squadraOspite' => 'Genova',
            'puntiCasa' => 70,
            'puntiOspite' => 40
        ],
    ]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks</title>
</head>
<body>
    
    <ul>
        <?php for($i = 0; $i < count($partite); $i++) { ?>
        <?php $this_partita = $partite[$i]; ?>
        <?php //var_dump($this_partita); ?>

        <li> <?php echo $this_partita['squadraCasa'] ?> - <?php echo $this_partita['squadraOspite'] ?> | <?php echo $this_partita['puntiCasa'] ?> - <?php echo $this_partita['puntiOspite'] ?></li>

        <?php } ?>
    </ul>
    
</body>
</html>