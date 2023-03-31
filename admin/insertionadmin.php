<!--SCRIPT POUR L'INSERTION DES INFORMATIONS DES admin DANS LA BASE DE DONNEES -->
<?php
//connexion a la bdd

$db = new PDO('mysql:host=localhost;dbname=based','root','');

//preparee la requete d'insertion

$pdoStat = $db->prepare('INSERT INTO admin VALUES (NULL, :username_ad, :password_ad, :confpsw_ad, :tel_ad)');

//lier les marqueurs

$pdoStat->bindValue(':username_ad', $_POST['uname'], PDO::PARAM_STR);
$pdoStat->bindValue(':password_ad', $_POST['psw'], PDO::PARAM_STR);
$pdoStat->bindValue(':confpsw_ad', $_POST['confpsw'], PDO::PARAM_STR);
$pdoStat->bindValue(':tel_ad', $_POST['tel_ad'], PDO::PARAM_INT);
//execution de la requete preparee
$insertIsOk = $pdoStat->execute();

    if($insertIsOk){
        $message=' <br><br><br> <a href="connexadmin.php"><span class="text-danger"type="button" class="menu-btn" style="width:auto; background-color:#10AC84; font-size:20px; 
        color:white; padding:5px; margin-top:600px; margin-bottom:-100px;cursor:pointer;"  >plateforme administration</span></a> 
        <div class="alert-succ">
        <span>PARFAIT! Vous vous etes inscrit avec succées ! Consulter  la platforme administration.</span>
        </div>
      ';
    }
    else{
        $message=' <a href="inscriptionadmin.php" ><img src="../img/retour.png" alt="" "></a><div class="alert-erreur">
        <span>ECHEC! VEUILLEZ REESSEYER..! </span>
       </div>';
    }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, 
        initial-scalable=1.0, maximum_scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../style.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"  charset="utf-8"></script>
        <script type="text/javascript" src="./js/home.js"  ></script>
        <title>Résultat:inscription</title>
    </head>

        <body> <center>  
        <!--Début wrapper-->
    <div class="wrapper">

        <!--début header -->
        <?php  include 'header.php' ?>
        <!-- Fin header-->

 <div>
<h1 class="gris" style="margin-top:90px;color: #66afe9;">Insertion des Administrateur</h1>
            <p><?php echo $message; ?></p></center>
</div>
          
       <!--Début du footer-->
       <?php  include 'footer.php' ?>
        <!--Fin du footer-->
</div>
</body>
    </html>
