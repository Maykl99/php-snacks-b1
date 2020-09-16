<?php
/*  Snack2 
    Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
    Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e 
    punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60 */

    //inizializzazione array bidimensionale
    $esitoPartiteBasket=[
        [
            'nomeSquadraCasa'   => 'Milano',
            'nomeSquadraOspite' => 'Cantù',
            'punteggioSquadraCasa' => '55',
            'punteggioSquadraCasa' => '60'
        ],

        [
            'nomeSquadraCasa'   => 'Roma',
            'nomeSquadraOspite' => 'Napoli',
            'punteggioSquadraCasa' => '45',
            'punteggioSquadraCasa' => '35'
        ],

        [
            'nomeSquadraCasa'   => 'Anzio',
            'nomeSquadraOspite' => 'Nettuno',
            'punteggioSquadraCasa' => '60',
            'punteggioSquadraCasa' => '50'
        ],

        [
            'nomeSquadraCasa'   => 'Milano',
            'nomeSquadraOspite' => 'Verona',
            'punteggioSquadraCasa' => '45',
            'punteggioSquadraCasa' => '55'
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <h2>Nomi squadre, relativo punteggio</h2>
    <?php for($i=0; $i<count($esitoPartiteBasket);$i++){ ?> <!-- ciclo i vari elementi dell'array -->
            <li>
            <span><?php echo $esitoPartiteBasket[$i]['nomeSquadraCasa'];?></span>
            <span>-</span>
            <span><?php echo $esitoPartiteBasket[$i]['nomeSquadraOspite'];?></span>
            <span>|</span>
            <span><?php echo $esitoPartiteBasket[$i]['punteggioSquadraCasa'];?></span>
            <span>-</span>
            <span><?php echo $esitoPartiteBasket[$i]['punteggioSquadraCasa'];?></span>
            </li>
    <?php } ?>
        
    </ul>
</body>
</html>