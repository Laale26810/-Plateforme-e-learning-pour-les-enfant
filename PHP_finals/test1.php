<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Test de Connaissances en Couleurs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
            background-image: url("images/colors_bg.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }
        
        h1 {
            color: purple;
        }
        
        .color {
            width: 200px;
            height: 200px;
            margin: 10px;
            display: inline-block;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: transform 0.3s ease;
            position: relative;
        }
        
        .color:hover {
            transform: scale(1.1);
        }
        
        .red {
            background-color: red;
        }
        
        .blue {
            background-color: blue;
        }
        
        form {
            margin-top: 40px;
        }
        
        p {
            font-size: 18px;
            margin-bottom: 10px;
        }
        
        ul {
            list-style-type: none;
            padding: 0;
            margin-bottom: 20px;
        }
        
        li {
            margin-bottom: 10px;
        }
        
        label {
            display: inline-block;
            width: 120px;
            font-weight: bold;
        }
        
        select {
            padding: 5px;
            font-size: 16px;
        }
        
        input[type="submit"] {
            padding: 10px 20px;
            font-size: 18px;
            background-color: purple;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Test de Connaissances en Couleurs</h1>
    
    <div class="color red"></div>
    <div class="color blue"></div>
    
    <h2>Test</h2>
    <form action="result1.php" method="POST">
        <p>Sélectionne la couleur correcte pour chaque forme :</p>
        <ul>
            <li>
                <label for="red-shape">Forme rouge :</label>
                <select name="red-shape" id="red-shape">
                    <option value="none">None</option>
                    <option value="red">Rouge</option>
                    <option value="blue">Bleu</option>
                </select>
            </li>
            <li>
                <label for="blue-shape">Forme bleue :</label>
                <select name="blue-shape" id="blue-shape">
                    <option value="none">None</option>
                    <option value="red">Rouge</option>
                    <option value="blue">Bleu</option>
                </select>
            </li>
        </ul>
        <input type="submit" value="Soumettre">
    </form>
</body>
</html>
