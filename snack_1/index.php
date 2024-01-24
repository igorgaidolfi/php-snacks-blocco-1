<?php
    $giornata_5 = [
        [
            'home_team' => 'Anadolu Efes',
            'away_team' => 'Partizan',
            'home_points' => 62,
            'away_points' => 60,
        ],
        [
            'home_team' => 'Real Madrid',
            'away_team' => 'Fenerbahce',
            'home_points' => 72,
            'away_points' => 53,
        ],
        [
            'home_team' => 'Olimpia Milano',
            'away_team' => 'Stella Rossa',
            'home_points' => 66,
            'away_points' => 69,
        ],
        [
            'home_team' => 'Panathinaikos',
            'away_team' => 'Olympiacos',
            'home_points' => 56,
            'away_points' => 73,
        ],
        [
            'home_team' => 'Bayern Monaco',
            'away_team' => 'Virtus Bologna',
            'home_points' => 52,
            'away_points' => 83,
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack 1</title>
    </head>
    <body>
        <div>
            <?php foreach( $giornata_5 as $teams){
                ?>
                <p><?php echo $teams["home_team"].' - '.$teams["away_team"].' | '.$teams["home_points"].' - '.$teams["away_points"]; ?></p>
            <?php } ?>
        </div>
    </body>
</html>