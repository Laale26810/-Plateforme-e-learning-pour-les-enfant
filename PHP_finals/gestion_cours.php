<!DOCTYPE html>
<html>
<head>
    <title>Gérer les cours</title>
    <Style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
}

.container {
    max-width: 600px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.container h1 {
    font-size: 24px;
    color: #8a4baf;
    text-align: center;
    margin-bottom: 20px;
}

.box-input {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.box-button {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #8a4baf;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.success {
    background-color: #d4edda;
    color: #155724;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 4px;
}

.error {
    background-color: #f8d7da;
    color: #721c24;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 4px;
}

    </style>
</head>
<body>
    <?php
    // Inclure le fichier de configuration
    require('config.php');

    // Vérifier si le formulaire a été soumis
    if (isset($_POST['submit'])) {
        // Récupérer les données du formulaire
        $course_name = $_POST['course_name'];
        $course_description = $_POST['course_description'];
        $video_url = $_POST['video_url'];
        $image_url = $_POST['image_url'];
        $content_text = $_POST['content_text'];

        // Insertion des données dans la base de données
        $query = "INSERT INTO courses (course_name, course_description, video_url, image_url, content_text) 
                  VALUES ('$course_name', '$course_description', '$video_url', '$image_url', '$content_text')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "<div class='success'>
                    <h3>Le cours a été ajouté avec succès.</h3>
                  </div>";
        } else {
            echo "<div class='error'>
                    <h3>Une erreur est survenue lors de l'ajout du cours.</h3>
                  </div>";
        }
    }
    ?>

    <div class="container">
        <h1>Gérer les cours</h1>
        <form class="box" method="post" action="">
            <input type="text" class="box-input" name="course_name" placeholder="Nom du cours" required />
            <textarea class="box-input" name="course_description" placeholder="Description du cours" required></textarea>
            <input type="text" class="box-input" name="video_url" placeholder="URL de la vidéo" required />
            <input type="text" class="box-input" name="image_url" placeholder="URL de l'image" required />
            <textarea class="box-input" name="content_text" placeholder="Contenu texte" required></textarea>
            <input type="submit" name="submit" value="Ajouter" class="box-button" />
        </form>
    </div>
</body>
</html>