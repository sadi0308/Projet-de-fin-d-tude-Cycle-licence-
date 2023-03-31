<?php
//connexion à la bdd
$db= new PDO('mysql:host=localhost;dbname=based','root','');

//preparation de la requete
$pdoStat=$db->prepare('UPDATE client SET uname_clt=:uname, email_clt=:mail, mdp_clt=:psw, cmdp_clt=:confpsw  WHERE id_clt=:num  LIMIT 1');

//liaison du parametre nomé 

$pdoStat->bindValue(':num', $_POST['idc'], PDO::PARAM_INT);
$pdoStat->bindValue(':uname', $_POST['uname'], PDO::PARAM_STR);
$pdoStat->bindValue(':mail', $_POST['mail'], PDO::PARAM_STR);
$pdoStat->bindValue(':psw', $_POST['psw'], PDO::PARAM_STR);
$pdoStat->bindValue(':confpsw', $_POST['confpsw'], PDO::PARAM_STR);

//execution 
$executeIsOk = $pdoStat->execute();

if($executeIsOk){
    $message='<div style="margin-top:100px;margin-left:-700px;margin-bottom:-100px;"><a href="listeclt.php"  ><img src="../img/retour.png" alt="" "></div>
    <div class="alert-succ">
    <span style="color:black;">PARFAIT! INFORMATIONS DU CLIENT MODIFIEES AVEC SUCCEES.</span>
    </div>';
}
else{
    $message='<a href="listeclt.php" ><img src="../img/retour.png" alt="" ">
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
        <title>Résultat:Modification client</title>
        <link rel="stylesheet" href="../style.css">
    </head>
        <body> <center>  
        <!--Début wrapper-->
    <div class="wrapper">

        <!--début header -->
        <?php  include 'header.php' ?>
        <!-- Fin header-->

 <div>
<h1 class="gris" style="margin-top:90px;color: #66afe9;">Modification des informations du client</h1>
            <p><?php echo $message; ?></p></center>
</div>
          
       <!--Début du footer-->
       <?php  include 'footer.php' ?>
        <!--Fin du footer-->
</div>
</body>
    </html>