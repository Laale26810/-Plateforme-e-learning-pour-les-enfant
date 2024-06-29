<!DOCTYPE html>
<html>
<head>
    <title>Tableau de bord</title>
    <style>
.container {
    text-align: center;
    margin-top: 20px;
}

h1 {
    font-size: 24px;
    color: #8a4baf;
    margin-bottom: 20px;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-btn {
    display: block;
    padding: 10px 20px;
    background-color: #8a4baf;
    color: #fff;
    border: none;
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

.dropdown-menu li a {
    color: #000;
    text-decoration: none;
}

.dropdown:hover .dropdown-menu {
    display: block;
}
        
    </style>
</head>
<body>
<div class="container">
    <h1>Tableau de bord</h1>
    <div class="dropdown">
        <button class="dropdown-btn">Menu</button>
        <ul class="dropdown-menu">
            <li><a href="home.php">Accueil</a></li>
            <li><a href="gestion_cours.php">Gérer les cours</a></li>
            <li><a href="add_user.php">Gérer les étudiants</a></li>
            <li><a href="logout.php">Déconnexion</a></li>
        </ul>
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
