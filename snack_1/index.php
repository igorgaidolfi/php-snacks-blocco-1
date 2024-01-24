<?php
    $giornata_5 = [
        [
            'home_team' => 'Anadolu Efes',
            'away_team' => 'Partizan',
            'home_points' => rand(60,90),
            'away_points' => rand(60,90),
        ],
        [
            'home_team' => 'Real Madrid',
            'away_team' => 'Fenerbahce',
            'home_points' => rand(70,90),
            'away_points' => rand(70,90),
        ],
        [
            'home_team' => 'Olimpia Milano',
            'away_team' => 'Stella Rossa',
            'home_points' => rand(50,90),
            'away_points' => rand(50,90),
        ],
        [
            'home_team' => 'Panathinaikos',
            'away_team' => 'Olympiacos',
            'home_points' => rand(50,80),
            'away_points' => rand(50,80),
        ],
        [
            'home_team' => 'Bayern Monaco',
            'away_team' => 'Virtus Bologna',
            'home_points' => rand(70,100),
            'away_points' => rand(70,100),
        ],
        [
            'home_team' => 'ASVEL',
            'away_team' => 'Zalgiris',
            'home_points' => rand(60,90),
            'away_points' => rand(60,90),
        ],
        [
            'home_team' => 'Monaco',
            'away_team' => 'ALBA Berlino',
            'home_points' => rand(60,90),
            'away_points' => rand(60,90),
        ],
        [
            'home_team' => 'Baskonia',
            'away_team' => 'Maccabi Tel Aviv',
            'home_points' => rand(60,90),
            'away_points' => rand(60,90),
        ],
        [
            'home_team' => 'Valencia',
            'away_team' => 'Barcelona',
            'home_points' => rand(60,90),
            'away_points' => rand(60,90),
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