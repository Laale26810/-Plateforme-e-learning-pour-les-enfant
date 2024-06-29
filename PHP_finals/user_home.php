<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
    <style>

         
        body { background-image: url("images/backg.jpg");
            background-size: cover; /* pour ajuster l'image à la taille de l'écran */
            background-repeat: no-repeat; /* pour empêcher la répétition de l'image */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }


        h1 {
            text-align: center;
            font-size: 24px;
            color: #8a4baf; /* Violet clair */
            margin-top: 20px;
        }

        .header {
            background-color: thistle;
            padding: 10px;
            text-align: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        li {
            display: inline-block;
            margin-right: 10px;
        }

        a.button {
            display: inline-block;
            padding: 10px;
            background-color: #8a4baf; /* Violet clair */
            color: #fff;
            text-decoration: none;
        }

        .search-form {
            display: flex;
            align-items: center;
        }

        .search-form input[type="text"] {
            width: 200px;
            padding: 5px;
            margin-right: 5px;
        }

        .search-form input[type="submit"] {
            padding: 5px 10px;
            background-color: #8a4baf;
            color: #fff;
            border: none;
        }

        .container {
            text-align: center;
            margin-top: 20px; /* Ajouter un espace entre le header et le contenu principal */
        }

        .container a.button {
            display: inline-block;
            margin: 10px;
            padding: 10px;
            background-color: #8a4baf; /* Violet clair */
            color: #fff;
            text-decoration: none;
        }

        .container img {
            display: block;
            width: 350px;
            height: 400px;
            margin-bottom: 10px;
          
        }
    </style>
    
</head>
<body>
    <h1>Bienvenue sur votre site d'apprentissage E-learning KIDS!</h1>
    <div class="header">
        <ul class="main-menu">
            <li><a href="contact.php" class="button">Contact</a></li>
            <li><a href="login.php" class="button">Logout</a></li>
        </ul>
        <form method="get" class="search-form">
            <input type="text" name="search" placeholder="Rechercher...">
            <input type="submit" value="Rechercher">
        </form>
    </div>

    <div class="container" >
        
        <a href="learn_music.html" class="button">
            <img src="images\musique.png" alt="Music">
            Music
        </a>
        <a href="learn_lang.html" class="button">
            <img src="images\lang.jpg" alt="Maths">
            Langues
        </a>
        <a href="learn_math.html" class="button">
            <img src="images\calcul.jpg" alt="Calcul">
            Math
        </a>
        <br>
        <a href="learn_couleur.html" class="button">
            <img src="images\colors.jpg" alt="Couleur">
            Couleur
        </a>
        <a href="watch.html" class="button">
            <img src="images\dessin.png" alt="Dessin animé">
            Dessin animé
        </a>
        <a href="gtg.php" class="button">
                        <img src="images\white.jpg" alt="Nouveau cours">
                        Nouveau cours
                    </a>
    </div>
</body>
</html>