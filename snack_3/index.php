<?php
    $posts = [
        '2-12-2017' =>[
            [
                'title' => 'Post 1',
                'author' => 'Bender Papagni',
                'text' => 'You\'re going to do his laundry? '
            ],
            [
                'title' => 'Post 2',
                'author' => 'Countess Papagni',
                'text' => 'Look, everyone wants to be like Germany'
            ],
        ],
        '19-5-2009' =>[
            [
                'title' => 'Post 1',
                'author' => 'Bender Joey',
                'text' => 'Hey, tell me something.'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Santa Claus',
                'text' => 'You\'ve got all this money'
            ],
        ],
        '3-11-2010' =>[
            [
                'title' => 'Post 1',
                'author' => 'Leela',
                'text' => 'Ooh, name it after me'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Fry',
                'text' => 'Goodbye, cruel world'
            ],
        ],
        '14-12-2020' =>[
            [
                'title' => 'Post 1',
                'author' => 'Amy',
                'text' => 'Quite possible'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Scruffy',
                'text' => 'Yep'
            ],
        ],
        '29-8-2002' =>[
            [
                'title' => 'Post 1',
                'author' => 'Hubert',
                'text' => 'Good news everyone'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Kif',
                'text' => 'Goodbye, with gusto'
            ],
        ],
    ];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack 3
        </title>
    </head>
    <body>
        <div>
        <?php foreach( $posts as $key => $post){
                ?>
                <h3><?php echo $key;?></h3>
                <?php foreach( $post as $single_post){
                    ?>
                        <h4><?php echo $single_post["title"];?></h4>
                        <p>Autore: <?php echo $single_post["author"];?></p>
                        <p>Testo: <?php echo $single_post["text"];?></p>
                    <?php } ?>
            <?php } ?>  
        </div>
    </body>
</html>