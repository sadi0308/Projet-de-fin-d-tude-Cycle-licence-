<!--PAGE D'AUTHENTIFICATION DE L4ADMINISTRATEUR DU SITE-->
<?php session_start() ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
         <meta charset="utf-8">
         <title>connexion</title>
         <link rel="stylesheet" href="../style.css">
         <script type="text/javascript" src="./js/home.js"  ></script>
    </head>
<body>
<?php
require_once '../js/database.php';

?>
<!--Début wapper-->
    <div class="wrapper">
        
        <!--début header -->
        <?php  include 'header.php' ?>
        <!-- Fin header-->

        <!--début de la main-container -->
        <div class="main-container">
            <?php
                if(isset($_POST) AND !empty($_POST)){
                    if( !empty(htmlspecialchars($_POST['username'])) AND !empty(htmlspecialchars($_POST['password']))){
                    $req = $db->prepare('SELECT * FROM admin WHERE username_ad = :username AND password_ad = :password '); // arnighd :
                        $req->execute([
                            'username' => $_POST['username'],
                            'password' => $_POST['password']]);
                        $user =$req->fetchObject();
                        if($user){
                        $_SESSION['admi']=$_POST['username']; 
                        header('location:index.php');
                    }
                    else{
                        echo  '<div class="alert-erreur">
                        <span>MOT DE PASSE OU NOM D UTILISATEUR INCORRECT.</span>
                       </div>';
                    }
                    }
                    else{
                         echo  '<div class="alert-erreur">
                        <span>VEULLIEZ REMPLIR TOUT LES CHAMPS</span>
                       </div>';
                    }
                }
                ?>
        <!--Formulaire de connexion-->      
        <div class="form">
            <form class="login-form" action="connexadmin.php" method="POST"> <!--jai ajoute le contenu de "action"-->
                <h2>Se connecter</h2>
                <center class="profile"><img src="../img/1.png" alt="" style="border-radius:50%;
                margin-bottom: 15px ;margin-bottom: 15px ;  width:100px;height: 100px;"></center>
                <input type="text" name="username" value="" placeholder="Nom d'utilisater" required>
                <input type="password" name="password" value="" placeholder="Mot de passe" required>
                <button type="submit" name="">Se connecter</button><br> <hr><br>
                <label style="color:#fff">
                    <input type="checkbox" checked="checked" name="remember" id="remember" class="btn"style="width:5%;margin-left:-100px;">   Se Souvenir de moi 
                </label>
                <p class="options">Etes-vous nouveau sur la plateforme?<a href="inscriptionadmin.php">Créez votre compte.</a></p>
            </form>
        </div>
      </div>
           
     <!--Début du footer-->
     <?php  include 'footer.php' ?>
     <!--Fin du footer-->
  
</div>  <!--Fin de wrapper-->
</body></html>




