<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "elearning";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

// Requête SQL pour récupérer les données
$sql = 'SELECT * FROM cours ';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Affichage des données
    while ($row = $result->fetch_assoc()) {
        echo ' <iframe width="560" height="315" src="'.$row["URLv"].'" title="YouTube video player" frameborder="0" controls></iframe>';
    }
} else {
    echo "L'administrateur n'a pas encore ajouter le nouveau cours.";
}

// Fermer la connexion à la base de données
$conn->close();
?>