<?php
//connexion a la bdd

$db = new PDO('mysql:host=localhost;dbname=based','root','');

//preparee la requete d'insertion

$pdoStat = $db->prepare('INSERT INTO produit VALUES (NULL, :ref_prod, :cat_prod, :titre_prod, :desg_prod, :photo_prod, :prix_prod, :stock_prod)');

//lier les marqueurs

$pdoStat->bindValue(':ref_prod', $_POST['ref'], PDO::PARAM_STR);
$pdoStat->bindValue(':cat_prod', $_POST['cat'], PDO::PARAM_STR);
$pdoStat->bindValue(':titre_prod', $_POST['titre'], PDO::PARAM_STR);
$pdoStat->bindValue(':desg_prod', $_POST['desg'], PDO::PARAM_STR);
$pdoStat->bindValue(':photo_prod',$_POST['photo'], PDO::PARAM_STR);
$pdoStat->bindValue(':prix_prod', $_POST['prix'], PDO::PARAM_INT);
$pdoStat->bindValue(':stock_prod', $_POST['stock'], PDO::PARAM_INT);

//execution de la requete preparee
$insertIsOk = $pdoStat->execute();
    if($insertIsOk){
        $message='<div style="margin-top:100px;margin-left:-700px;margin-bottom:-100px;"><a href="listeprod.php"  ><img src="../img/retour.png" alt="" "></div>
        <div class="alert-succ">
        <span style="color:black;">PARFAIT! PRODUIT AJOUTE AVEC SUCCEES.</span>
        </div>';
    }
    else{
        $message=' <a href="listeprod.php" ><img src="../img/retour.png" alt="" "></a><div class="alert-erreur">
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
        <link rel="stylesheet" href="../style.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"  charset="utf-8"></script>
        <script type="text/javascript" src="./js/home.js"  ></script>
        <title>Résultat:Ajout produit</title>
    </head>

        <body> <center>  
        <!--Début wrapper-->
    <div class="wrapper">

        <!--début header -->
        <?php  include 'header.php' ?>
        <!-- Fin header-->

 <div>
<h1 class="gris" style="margin-top:90px;color: #66afe9;">Ajout de produits au catalogue </h1>
            <p><?php echo $message; ?></p></center>
</div>
          
       <!--Début du footer-->
       <?php  include 'footer.php' ?>
        <!--Fin du footer-->
</div>
</body>
    </html>