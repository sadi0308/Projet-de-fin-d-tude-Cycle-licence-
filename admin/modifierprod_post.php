<?php
//connexion à la bdd
$db= new PDO('mysql:host=localhost;dbname=based','root','');

//preparation de la requete 
$pdoStat=$db->prepare('UPDATE produit SET ref_prod= :ref, cat_prod = :cat, titre_prod= :titre, desg_prod=:desg, photo_prod=:photo, prix_prod=:prix,stock_prod=:stock WHERE id_prod=:num  LIMIT 1');

//liaison du parametre nomé 

$pdoStat->bindValue(':num', $_POST['idc'], PDO::PARAM_INT);
$pdoStat->bindValue(':ref', $_POST['ref'], PDO::PARAM_STR);
$pdoStat->bindValue(':cat', $_POST['cat'], PDO::PARAM_STR);
$pdoStat->bindValue(':titre', $_POST['titre'], PDO::PARAM_STR);
$pdoStat->bindValue(':desg', $_POST['desg'], PDO::PARAM_STR);
$pdoStat->bindValue(':photo', $_POST['photo'], PDO::PARAM_STR);
$pdoStat->bindValue(':prix', $_POST['prix'], PDO::PARAM_STR);
$pdoStat->bindValue(':stock', $_POST['stock'], PDO::PARAM_STR);
//execution 
$executeIsOk = $pdoStat->execute();

if($executeIsOk){
    $message='<div style="margin-top:100px;margin-left:-700px;margin-bottom:-100px;"><a href="listeprod.php"  ><img src="../img/retour.png" alt="" "></div>
    <div class="alert-succ" >
    <span style="color:black;">PARFAIT! INFORMATIONS PRODUIT MODIFIEES AVEC SUCCEES.</span>
    </div>
  ';
}
else{
    $message='<a href="listeprod.php" ><img src="../img/retour.png" alt="" ">
    <div class="alert-erreur">
    <span style="color:black;">ECHEC! VEUILLEZ REESEYER..! </span>
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
        <title>Résultat:Modification produit</title>
    </head>
        <body> <center>  
        <!--Début wrapper-->
    <div class="wrapper">

        <!--début header -->
        <?php  include 'header.php' ?>
        <!-- Fin header-->

 <div>
<h1 class="gris" style="margin-top:90px;color: #66afe9;">Modification des informations du produit</h1>
            <p><?php echo $message; ?></p></center>
</div>
          
       <!--Début du footer-->
       <?php  include 'footer.php' ?>
        <!--Fin du footer-->
</div>
</body>
    </html>