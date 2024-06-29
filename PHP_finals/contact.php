<!doctype html>
<html >

<head>
    <title>Login</title>
    <style>
        /* Styles for header area */
        .header_area {
            background-color: #333;
            color: #fff;
            padding: 20px;
        }

        .top_header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .social_top {
            list-style: none;
            display: flex;
        }

        .social_top li {
            margin-right: 10px;
        }

        .social_top li a {
            color: #fff;
        }

        .loginreg ul {
            list-style: none;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .loginreg ul li {
            margin-right: 10px;
            font-weight: bold;
        }

        .loginreg ul li a {
            color: #fff;
        }

        /* Styles for logo area */
        .logo_area {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            max-width: 100%;
            height: auto;
        }

        .contact_header p {
            margin: 0;
        }

        /* Styles for featured categories section */
        .featured_categories {
            background-color: #f7f7f7;
            padding: 50px 0;
        }

        .section_title h2 {
            margin-bottom: 30px;
        }

        .section_title p {
            font-size: 18px;
            line-height: 30px;
        }

        .contact_wrap {
            margin-top: 50px;
        }

        .contact_form label {
            display: block;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .contact_form input[type="text"],
        .contact_form input[type="email"],
        .contact_form input[type="subject"],
        .contact_form textarea {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 3px;
            margin-bottom: 20px;
        }

        .contact_form input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
        }

        .contact_form input[type="submit"]:hover {
            background-color: #808080;
        }

        /* Styles for footer area */
        .footer_area {
            background-color: #333;
            color: #fff;
            padding: 20px;
        }
    </style>

</head>

<body>
    <header class="header_area">
        <div class="container">
            <div class="row top_header">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="loginreg">
                        <ul>
                            <li><a href="logout.php">Déconnexion</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row logo_area">
                <div class="col-md-6 col-sm-6- col-xs-12">
                    <div class="logo">
                        <img src="images/logo.png" alt="E-learning" style="max-width: 200px;">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="contact_header pull-right text-right">
                        <p><strong>Email: </strong>admin@gmail.com</p>
                        <p><strong>Téléphone: </strong>+212 476280</p>
                        <p>rue Av, code postal, ville</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="featured_categories">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_title text-center contact_title">
                        <h2><i class="fa fa-paper-plane-o"></i>Nous contacter</h2>
                        <p>Si vous avez des questions concernant ce site, n'hésitez pas à nous contacter. Nous serons ravis d'avoir de vos nouvelles.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="contact_wrap">
                    <form action="contact.php" method="post" class="contact_form">
                        <p>
                            <label for="name">Votre nom</label>
                            <input type="text" placeholder="Nom" name="name" required>
                        </p>
                        <p>
                            <label for="email">Votre email</label>
                            <input type="email" placeholder="Email" name="email" required>
                        </p>
                        <p>
                            <label for="subject">Sujet</label>
                            <input type="subject" placeholder="Sujet" name="subject" required>
                        </p>
                        <p>
                            <label for="message">Votre message</label>
                            <textarea placeholder="Votre message" name="message" rows="10" required></textarea>
                        </p>
                        <p>
                            <input type="submit" name="send" value="Envoyer">
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php
if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $to = "your_email@example.com"; // Replace with your email address

    $headers = "From: $name <$email>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

    $send = mail($to, $subject, $message, $headers);
    if ($send) {
        echo "'Email envoyé avec succès !! Merci.'";
    } else {
        echo "'Une erreur est survenue lors de l'envoi de l'email. Veuillez réessayer plus tard.'";
    }
}
?>

    <footer class="footer_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright text-center">
                        <a href="#"><img src="images/logo.png" alt=""></a>
                        <p>&copy;2023 | Tous droits réservés par E-Learning_kids</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
