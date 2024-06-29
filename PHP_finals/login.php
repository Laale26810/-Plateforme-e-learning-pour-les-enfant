<?php
$con = mysqli_connect('localhost', 'root', '', 'elearning') or die('Error Establishing Database Connection!!');
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Login</title>
    <style>
        body {
            background-image: url("images/backg.jpg");
            background-repeat: no-repeat; /* pour empêcher la répétition de l'image */
            background-size: 100%;
        }
        /* Ajuster le style du logo */
        .logo img {
            max-width: 200px; /* Ajuster la largeur du logo */
        }

        /* Styler la section de connexion */
        .login_area {
            background-color: #f7f7f7; /* Couleur de fond de la section */
            padding: 20px; /* Espacement intérieur */
        }

        .login_form {
            background-color: #ffffff; /* Couleur de fond du formulaire */
            padding: 20px; /* Espacement intérieur */
            border: 1px solid #ccc; /* Bordure */
        }

        .login_form h2 {
            text-align: center;
            margin: 20px 0;
            font-family: Arial, sans-serif; /* Changer la police du titre */
        }

        .login_form input[type="text"],
        .login_form input[type="password"] {
            width: 100%;
            padding: 15px; /* Agrandir la taille des zones de saisie */
            margin-bottom: 15px;
            border: 1px solid #ccc;
        }

        .login_form input[type="submit"] {
            width: 100%;
            padding: 15px; /* Agrandir la taille du bouton */
            background-color: #333333;
            color: #ffffff;
            border: none;
            cursor: pointer;
        }

        .login_form p {
            font-size: 16px;
            margin-top: 20px;
            text-align: center;
        }

        .login_form p a {
            color: #333333;
        }

        .login_form p a:hover {
            color: #808080;
        }

        .login_form p:last-child {
            margin: 20px 0;
            color: #222222;
            text-align: center;
            font-size: 18px;
        }

        .login_form p:last-child a {
            color: #333333;
        }

        .login_form p:last-child a:hover {
            color: #808080;
        }
    </style>

</head>

<body>
    <section class="login_area">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="logo">
                        <img src="images/logo.png" alt="E-learning">
                    </div>
                    <div class="login_form">
                        <h2>Learner's Login</h2>
                        <form name="form" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input id="user" type="text" class="form-control" name="user" placeholder="User" required>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>

                            <div class="form-group">
                                <!-- Button -->
                                <div class="col-sm-12 controls">
                                    <input type="submit" value="Log In" class="btn btn-primary pull-right" name="login" />
                                </div>
                            </div>
                            <p>New Here?<br>If yes Sign Up <strong><a href="registration.php">Here</a></strong></p>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    if (isset($_POST['login'])) {
        $user = $_POST['user'];
        $pass = $_POST['password'];
        $login_query = "SELECT * FROM users WHERE user_name='$user' AND user_pass='$pass'";
        
        $run_login = mysqli_query($con, $login_query);
        
        session_start();
        
        if (mysqli_num_rows($run_login) > 0) {
            $users = mysqli_fetch_assoc($run_login); // Récupérer les informations de l'utilisateur
            
            $_SESSION['user_name'] = $user;
            
            if ($users['Type'] == 'admin') {
                header('location: admin_home.php');      
            } else {
                header('location: user_home.php');
            }
            
        } else {
            echo "<script>alert('Username or Password is incorrect!');</script>";
        }
        
        // Fermez la connexion après avoir terminé
        mysqli_close($con);
    }
?>

</body>

</html>
