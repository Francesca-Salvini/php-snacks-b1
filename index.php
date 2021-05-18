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



<!-- Snack 2
Passare come parametri GET name, mail e age 
e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e 
che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, 
altrimenti “Accesso negato” -->

<?php 

    //EMAIL
    $email = $_GET['email'];
    var_dump($email);

    //NAME
    $name = $_GET['name'];
    var_dump($name);

    //AGE
    $age = $_GET['age'];
    var_dump($age);


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
    
    <!-- PRIMO SNACK -->
    <ul>
        <?php for($i = 0; $i < count($partite); $i++) { ?>
        <?php $this_partita = $partite[$i]; ?>
        <?php //var_dump($this_partita); ?>

        <li> <?php echo $this_partita['squadraCasa'] ?> - <?php echo $this_partita['squadraOspite'] ?> | <?php echo $this_partita['puntiCasa'] ?> - <?php echo $this_partita['puntiOspite'] ?></li>

        <?php } ?>
    </ul>

    <!-- FINE PRIMO SNACK -->

    <!-- SECONDO SNACK-->

    <!-- Controllo se la mail inserita nell'URl contiene una chiocciola e un punto -->
    <?php if( strpos($email, '@') === false || strpos($email, '.') === false) {
        echo 'ko';
    }else {
        echo 'ok';
    }
    ?>
    <!-- FINE SECONDO SNACK-->
    
</body>
</html>