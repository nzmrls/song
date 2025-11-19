<?php
    $title = "Be My Mistake";
    $artist = "The 1975";
    $mood = "guilt";

    $nouns = [
        'mistake', // 0
        'light',   // 1
        'jeans',   // 2
        'ones',    // 3
        'smell',   // 4
        'hair',    // 5
        'feet',    // 6
        'hotel',   // 7
        'room',    // 8
        'sign',    // 9
        'jokes',   // 10
        'drink',   // 11
        'she',     // 12
        'you',     // 13
        'I',       // 14
        'me',      // 15
        'her',     // 16
    ];

    $verbs = [
        'be',       // 0
        'turn',     // 1
        'bought',   // 2
        'like',     // 3
        'wanna',    // 4
        'hug',      // 5
        'sleep',    // 6
        'reminds',  // 7
        'wait',     // 8
        'give',     // 9
        'get',      // 10
        'make',     // 11
        'see',      // 12
        'take',     // 13
        'have',     // 14
        'called',   // 15
        'speak',    // 16
        'do',       // 17
        'makes',    // 18
    ];

    $adjectives = [
        'those',    // 0
        'lonesome', // 1
        'much',     // 2
        'hard',     // 3
        'weak',     // 4
        'my',       // 5
        'your',     // 6
        'outside',  // 7
    ];

    $numberOfNouns = count($nouns);
    $numberOfVerbs = count($verbs);
    $numberOfAdjectives = count($adjectives);
    $total = $numberOfNouns + $numberOfVerbs + $numberOfAdjectives;

    $verse1 = "And {$verbs[0]} {$adjectives[5]} {$nouns[0]}<br>
        Then {$verbs[1]} out the {$nouns[1]}<br>
        {$nouns[12]} {$verbs[2]} {$nouns[2]} {$adjectives[0]} {$nouns[2]}<br>
        The {$nouns[3]} {$nouns[13]} {$verbs[3]}<br>
        {$nouns[14]} don't {$verbs[4]} {$verbs[5]}<br>
        {$nouns[14]} just {$verbs[4]} {$verbs[6]}<br>
        The {$nouns[4]} of {$adjectives[6]} {$nouns[5]}<br>
        {$verbs[7]} {$nouns[15]} of {$nouns[16]} {$nouns[6]}";

    $chorus = "So don't {$verbs[8]} {$adjectives[7]} {$adjectives[5]} {$nouns[7]} {$nouns[8]}<br>
        Just {$verbs[8]} till {$nouns[14]} {$verbs[9]} {$nouns[13]} a {$nouns[9]}<br>
        'Cause {$nouns[14]} get {$adjectives[1]} sometimes<br>
        Save all the {$nouns[10]} you're gonna {$verbs[11]}<br>
        While {$nouns[14]} {$verbs[11]} how {$adjectives[2]} {$nouns[11]} {$nouns[14]} can {$verbs[11]}<br>
        Then {$verbs[0]} {$adjectives[5]} {$nouns[0]}";

    $verse2 = "{$nouns[14]} shouldn't {$verbs[14]} {$verbs[15]}<br>
    'Cause we shouldn't {$verbs[15]}<br>
    {$nouns[13]} {$verbs[11]} {$nouns[15]} {$adjectives[3]}<br>
    But {$nouns[12]} {$verbs[18]} {$nouns[15]} {$adjectives[4]}";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Be My Mistake Lyrics</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                color: #333;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            .container {
                background-color: #fff;
                border-radius: 8px;
                padding: 30px;
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
                width: 80%;
                max-width: 800px;
                text-align: center;
                line-height: 1.6;
            }
            h1 {
                color: #e63946;
                font-size: 36px;
                margin-bottom: 20px;
            }
            h2 {
                color: #6c757d;
                font-size: 24px;
                margin-bottom: 40px;
            }
            p {
                font-size: 18px;
                margin: 10px 0;
                color: #555;
            }
            strong {
                color: #e63946;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1><?= $title ?></h1>
            <h2><?= $artist ?></h2>
            <p><strong>Verse 1</strong></p>
            <p><?= $verse1 ?></p>
            <p><strong>Chorus</strong></p>
            <p><?= $chorus ?></p>
            <p><strong>Verse 2</strong></p>
            <p><?= $verse2 ?></p>
            <p><strong>Chorus</strong></p>
            <p><?= $chorus ?></p>
            <p><strong>Word Counts</strong></p>
            <p>Nouns: <?= $numberOfNouns ?></p>
            <p>Verbs: <?= $numberOfVerbs ?></p>
            <p>Adjectives: <?= $numberOfAdjectives ?></p>
            <p>Total Words: <?= $total ?></p>
        </div>
    </body>
</html>


