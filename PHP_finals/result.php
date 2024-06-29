<?php
$answers = [
    'blue' => 'square',
    'red' => 'circle',
    'yellow' => 'triangle',
    'green' => 'rectangle'
];

$score = 0;
$results = [];

foreach ($answers as $color => $form) {
    if (isset($_POST[$color]) && $_POST[$color] === $form) {
        $score++;
        $results[$color] = true;
    } else {
        $results[$color] = false;
    }
}

$totalQuestions = count($answers);
$percentage = ($score / $totalQuestions) * 100;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Résultat du Test</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        
        h1 {
            color: #8a4baf; /* Violet clair */
        }
        
        h2 {
            color: #ff6600;
        }
        
        p {
            margin: 10px;
        }
        
        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        
        li {
            margin: 10px 0;
        }
        
        .correct {
            color: green;
        }
        
        .incorrect {
            color: red;
        }
        
        .shape {
            width: 100px;
            height: 100px;
            margin: 10px;
            display: inline-block;
        }
        
        .circle {
            background-color: red;
            border-radius: 50%;
        }
        
        .square {
            background-color: blue;
        }
        
        .triangle {
            background-color: yellow;
            clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
        }
        
        .rectangle {
            background-color: green;
            width: 150px;
        }
    </style>
</head>
<body>
    <h1>Résultat du Test</h1>
    
    <h2>Récapitulatif</h2>
    <p>Vous avez répondu correctement à <?php echo $score; ?> question(s) sur un total de <?php echo $totalQuestions; ?>.</p>
    <p>Votre score : <?php echo $percentage; ?>%</p>
    
    <h2>Détails</h2>
    <ul>
        <li>
            Bleu : 
            <?php
            if ($results['blue']) {
                echo '<span class="correct">Correct</span>';
            } else {
                echo '<span class="incorrect">Incorrect</span>';
            }
            ?>
            <br>
            <div class="shape square"></div> 
            <br>Carré
        </li>
        <li>
            Rouge : 
            <?php
            if ($results['red']) {
                echo '<span class="correct">Correct</span>';
            } else {
                echo '<span class="incorrect">Incorrect</span>';
            }
            ?>
            <br>
            <div class="shape circle"></div> 
            <br>Cercle
        </li>
        <li>
            Jaune : 
            <?php
            if ($results['yellow']) {
                echo '<span class="correct">Correct</span>';
            } else {
                echo '<span class="incorrect">Incorrect</span>';
            }
            ?>
            <br>
            <div class="shapetriangle"></div>
            <br>Triangle
        </li>
        <li>
            Vert :
            <?php
            if ($results['green']) {
                echo '<span class="correct">Correct</span>';
            } else {
                echo '<span class="incorrect">Incorrect</span>';
            }
            ?>
            <br>
            <div class="shape rectangle"></div>
            <br>Rectangle
        </li>
    </ul>
</body>
</html>



