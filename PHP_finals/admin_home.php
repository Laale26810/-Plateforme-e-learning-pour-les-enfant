<!DOCTYPE html>
<html>
<head>
    <title>Interface d'administration</title>
    <style>
        body {
            background-image: url("images/backg.jpg");
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
        .container a.button {
            display: inline-block;
            margin: 10px;
            padding: 10px;
            background-color: #8a4baf; /* Violet clair */
            color: #fff;
            text-decoration: none;
        }

        

        .dashboard-item h2 {
            color: #8a4baf; /* Violet clair */
            font-size: 18px;
            margin-top: 0;
        }

        .dashboard-item p {
            color: #333;
        }
        
        .dropdown {
            position: relative;
            display: inline-block;
        }
        
        .menu-container {
            display: flex;
            align-items: center;
            justify-content: flex-end; /* Aligner le contenu à droite */
            padding: 10px;
        }
        
        .menu-item {
            margin: 0 10px;
        }
        
        .menu-item a {
            color: #8a4baf;
            text-decoration: none;
            font-weight: bold;
            font-size: 16px;
        }
        
        .menu-item a:hover {
            color: #fff;
            background-color: #8a4baf;
            padding: 8px 12px;
            border-radius: 4px;
        }
        
        .dropdown-btn {
            background-color: #8a4baf;
            color: #fff;
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: #fff;
            list-style-type: none;
            margin: 0;
            padding: 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        
        .dropdown-menu li {
            padding: 10px;
        }
        
        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
</head>
<body>
    <h1>Bienvenue sur votre Interface d'administration</h1>
    <div class="header">
        <div class="menu-container">
            <div class="dropdown">
                <button class="dropdown-btn">Menu</button>
                <ul class="dropdown-menu">
                    <li><a href="home.php">Accueil</a></li>
                    <li><a href="gestion_cours.php">Gérer les cours</a></li>
                    <li><a href="add_user.php">Gérer les étudiants</a></li>
                    <li><a href="logout.php">Déconnexion</a></li>
                </ul>
            </div>
            <div class="menu-item">
                <a href="gestion_cours.php">Gérer les cours</a>
            </div>
            <div class="menu-item">
                <a href="add_user.php">Gérer les étudiants</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="dashboard-item">
            <h2>récemment ajoutés</h2>
            <p> 
                <div class="container">
                <a href="learn_music.html" class="button">
            <img src="images\musique.png" alt="Music">
            Music
        </a>
                    <a href="learn_lang.html" class="button">
                        <img src="images\lang.jpg" alt="Maths">
                        Langues
                    </a>
                    <a href="learn_math.html" class="button">
                        <img src="images\calcul.jpg" alt="Math">
                        MatCalcul
                    </a><br>
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
            </p>
        </div>
    </div>
    
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var dropdownBtn = document.querySelector(".dropdown-btn");
            var dropdownMenu = document.querySelector(".dropdown-menu");

            dropdownBtn.addEventListener("click", function() {
                dropdownMenu.classList.toggle("show");
            });

            window.addEventListener("click", function(event) {
                if (!dropdownBtn.contains(event.target)) {
                    dropdownMenu.classList.remove("show");
                }
            });
        });
    </script>
</body>
</html>
