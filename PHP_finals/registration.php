<?php
$con = mysqli_connect('localhost', 'root', '', 'elearning') or die('Error Establishing Database Connection!!');
?>

<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <title>utilisateur</title>


    <style>
        body{
            background-color: #808080;
        }
        .login_area{
            margin-top: 50px;
            padding: 50px;
            background-color:  #777777;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
        }
        .logo{
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img{
            max-width: 200px;
        }
        .login_form{
            max-width: 500px;
            margin: 0 auto;
        }
        .login_form h2{
            margin-bottom: 30px;
        }
        .input-group{
            margin-bottom: 20px;
        }
        .input-group-addon{
            background-color: #efefef;
            border: none;
        }
        .input-group-addon i{
            color: #aaa;
        }
        .form-control{
            border: none;
            border-radius: 0px;
            box-shadow: none;
            background-color: #efefef;
            padding: 10px;
        }
        input[type="submit"].btn{
            background-color: #007bff;
            border: none;
            border-radius: 0px;
            box-shadow: none;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        input[type="submit"].btn:hover{
            background-color: #0069d9;
        }
        p{
            font-size: 16px;
            color: #fff;
            margin-top: 20px;
            text-align: center;
        }
        p a{
            color: #fff;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <section class="login_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo">
                        <img src="images/logo.png" >
                    </div>
                    <div class="login_form">
                       <h2 style="text-align:center;margin:20px 0;">creer votre compte utilisateur</h2>
                        <form name="form" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST"> 
                            <div class="input-group">
                                <input id="prenom" type="text" class="form-control" name="prnm" placeholder="prenom"> <br>                                       
                                <input id="nm" type="text" class="form-control" name="nm" placeholder="nom">  <br>                                      
                                <input id="email" type="email" class="form-control" name="email" placeholder="User Email"> <br>                                                   
                                <input id="user" type="text" class="form-control" name="user" placeholder="User"> <br>                                     
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password"> <br>
                            </div>  
                            <div class="form-group">
                                <!-- Button -->
                                <div class="col-sm-12 controls">
                                    <input type="submit" value="Submit" class="btn btn-primary pull-right" name="register"/>                         
                                </div>
                            </div>
                            <p style="color:#fff;font-size:16px;">Already an Instructor?? Login <strong><a href="login.php">Here</a></strong> </p>
                        </form>
                        <p style="margin:20px 0;color:#222;text-align:center;font-size:18px;">Go back to the <strong><a href="home.php">HOMEPAGE</a></strong> </p>      
                    </div>
                </div>
            </div>
        </div> 
    </section>

    <?php 
    if(isset($_POST['register'])){
        $prnm = mysqli_real_escape_string($con, $_POST['prnm']);  
        $nm = mysqli_real_escape_string($con, $_POST['nm']);  
        $email = $_POST['email'];  
        $user = mysqli_real_escape_string($con, $_POST['user']);     
        $pass = $_POST['password']; 

        if($prnm == '' OR $nm == '' OR $email == '' OR $user == '' OR $pass == '' ){
            echo "<script>alert('Please Fill All The Fields')</script>";
            exit();
        } else {
            $email_check = "SELECT * FROM users WHERE user_email='$email'";
            $username_check = "SELECT * FROM users WHERE user_name='$user'";
            $run_email = mysqli_query($con, $email_check);
            $run_username = mysqli_query($con, $username_check);

            if ($run_email && $run_username) { // Vérifie si les requêtes ont été exécutées avec succès
                if (mysqli_num_rows($run_email) > 0) {
                    echo "<script>alert('$email Déjà existant.!!');</script>";
                } elseif (mysqli_num_rows($run_username) > 0) {
                    echo "<script>alert('Username $user Already Exists!!');</script>"; 
                } else {
                    $insert_user = "INSERT INTO users (user_prnm, user_nm, user_email, user_name, user_pass) VALUES ('$prnm', '$nm', '$email', '$user', '$pass')";
                    $run_reg = mysqli_query($con, $insert_user); 
                    if($run_reg){
                        echo "<script>alert('Inscription réussie ! Veuillez vous connecter !')</script>";
                        echo "<script>window.open('login.php','_self');</script>"; 
                    }
                }
            }
        }
    }        
    ?>         
</body>
</html>   
