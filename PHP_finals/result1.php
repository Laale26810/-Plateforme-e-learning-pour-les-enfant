<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Résultats du Test de Connaissances en Couleurs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
            background-image: url("images/colors_bg.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-color: #f2f2f2;
        }
        
        h1 {
            color: purple;
        }
        
        table {
            margin: 40px auto;
            border-collapse: collapse;
            width: 600px;
        }
        
        table th {
            background-color: purple;
            color: white;
            padding: 30px;
        }
        
        table td {
            padding: 30px;
        }
        
        .correct {
            color: green;
            font-weight: bold;
        }
        
        .incorrect {
            color: red;
            font-weight: bold;
        }
        
        .score {
            margin-top: 50px;
            font-size: 24px;
            font-weight: bold;
        }
        
        .percentage {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h1>Résultats du Test </h1>
    <br>
    
    <table>
        <tr>
            <th>Question</th>
            <th>Votre réponse</th>
            <th>Résultat</th>
        </tr>
    
        <?php
        // Récupération des réponses du formulaire
        $redShape = $_POST['red-shape'];
        $blueShape = $_POST['blue-shape'];
        
        // Vérification des réponses
        $correctAnswers = [
            'red-shape' => 'red',
            'blue-shape' => 'blue'
        ];
        
        $score = 0;
        
        foreach ($correctAnswers as $question => $correctAnswer) {
            echo "<tr>";
            echo "<td>$question</td>";
            echo "<td>{$_POST[$question]}</td>";
            
            if ($_POST[$question] === $correctAnswer) {
                echo "<td class='correct'>Correcte</td>";
                $score++;
            } else {
                echo "<td class='incorrect'>Incorrecte</td>";
            }
            
            echo "</tr>";
        }
        
        $totalQuestions = count($correctAnswers);
        $percentage = ($score / $totalQuestions) * 100;
        ?>
    </table>
    <br>
    
    <div class="score">
        <p>Votre score : <span><?php echo $score; ?>/<?php echo $totalQuestions; ?></span></p>
        <p class="percentage">Pourcentage de réussite : <span><?php echo $percentage; ?>%</span></p>
    </div>
</body>
</html>
