<!DOCTYPE html>
<html>
<head>
<style>
    /* style.css */

body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}

.box {
  width: 300px;
  margin: 0 auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.box-title {
  text-align: center;
  font-size: 24px;
  color: #8a4baf; /* Violet clair */
  margin-bottom: 20px;
}

.box-input {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

.box-input:focus {
  outline: none;
  border-color: #8a4baf; /* Violet clair */
}

.box-button {
  width: 100%;
  padding: 10px;
  background-color: #8a4baf; /* Violet clair */
  color: #fff;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}

.box-button:hover {
  background-color: #6e3892; /* Violet plus foncé au survol */
}

.sucess {
  text-align: center;
  margin-top: 20px;
}

.sucess h3 {
  color: #8a4baf; /* Violet clair */
}

.sucess a {
  color: #8a4baf; /* Violet clair */
  text-decoration: none;
}

.sucess a:hover {
  text-decoration: underline;
}

</style>
</head>
<body>
<?php
require('config.php');

if (isset( $_REQUEST['user_prnm'], $_REQUEST['user_nm'], $_REQUEST['user_name'], $_REQUEST['user_email'], $_REQUEST['user_pass'], $_REQUEST['Type'])){
  // récupérer le nom d'utilisateur 
  $user_prnm = stripslashes($_REQUEST['user_prnm']);
  $user_prnm = mysqli_real_escape_string($conn, $user_prnm); 
  $user_nm = stripslashes($_REQUEST['user_nm']);
  $user_nm = mysqli_real_escape_string($conn, $user_nm); 
  $user_name = stripslashes($_REQUEST['user_name']);
  $user_name = mysqli_real_escape_string($conn, $user_name); 
  // récupérer l'email 
  $user_email = stripslashes($_REQUEST['user_email']);
  $user_email = mysqli_real_escape_string($conn, $user_email);
  // récupérer le mot de passe 
  $user_pass = mysqli_real_escape_string($conn, $user_pass);
  // récupérer le type (user | admin)
  $Type = stripslashes($_REQUEST['Type']);
  $Type = mysqli_real_escape_string($conn, $Type);
  
    $query = "INSERT into `users` (user_id, user_prnm, user_nm, user_name, user_email, user_pass, Type, )
          VALUES ('','$user_nprnm', '$user_nm','$user_name', '$user_email', '$Type', ' $user_pass')";
    $res = mysqli_query($conn, $query);

    if($res){
       echo "<div class='sucess'>
             <h3>L'utilisateur a été créée avec succés.</h3>
             <p>Cliquez <a href='home.php'>ici</a> pour retourner à la page d'accueil</p>
       </div>";
    }
}else{
?>
<form class="box" action="" method="post">

    <h1 class="box-title">Add user</h1>
  <input type="text" class="box-input" name="user_prnm" 
  placeholder="prenom" required />
  <input type="text" class="box-input" name="user_nm" 
  placeholder="nom" required />
  <input type="text" class="box-input" name="user_name" 
  placeholder="Nom d'utilisateur" required />
    <input type="text" class="box-input" name="email" 
  placeholder="Email" required />

  
  <div>
      <select class="box-input" name="Type" id="Type" >
        <option value="" disabled selected>Type</option>
        <option value="admin">Admin</option>
        <option value="user">User</option>
      </select>
  </div>
  
    <input type="password" class="box-input" name="user_pass" 
  placeholder="Mot de passe" required />
  
    <input type="submit" name="submit" value="+ Add" class="box-button" />
</form>
<?php } ?>
</body>
</html>