<?php
$db= new PDO('mysql:host=localhost;dbname=based','root','');
$pdoStat = $db->prepare('SELECT * FROM client WHERE id_clt= :num');
$pdoStat->bindValue(':num',$_GET['idc'], PDO::PARAM_INT);
$executeIsOk = $pdoStat->execute();
$client = $pdoStat->fetch();
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
         <meta charset="utf-8">
         <title>Modifier un client</title>
         <link rel="stylesheet" href="../style.css">
         <script type="text/javascript" src="../js/script.js"></script>
         </head>
<body>
 <!--Début wapper-->
    <div class="wrapper">
           <!--début header -->
           <div class="header">
        <div class="header-menu">
        <div class="title"> 
            <a href="home.php"> Big</a><span> Deal </span>
        </div>
  
        <form action = "recherche.php" method = "GET">
            <div id="rolling_bar">
                <input type = "search" name ="terme"  placeholder="Chercher un produit, une marque ou autres ..." id="txt" placeholder>
                <a href="#" id="btn">
                <input type="hidden"  name ="s" value ="Rechercher" ><img src="../img/search_image_1.png" alt="img"  style=" height: 30px; width: 30;"> </a>
            </div>
        </form>

        <ul style="margin-top:20px;"> 
            <li>
                <img src="../img/lo.ico" alt="" onclick="document.getElementById('id01').style.display='block'"
                style=" border-radius:50%;background-color:#fff; cursor:pointer; img:hover{color:blue} ;padding:1px;"><br> <br>
                <div id="id01" class="modal" > 
                    <form style="width:60%;" class="modal-content animate" action="" method="POST">
                        <div class="imgcontainer"><br>
                            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        </div>
                        <div class="ctn">
                            <center>
                                <li style="font-size: 25px; margin-left:-50px;"><img src="../img/lo.ico">Azazga,boulvard Ahmed Zaidat<br></li><img src="../img/azazga.jpg" alt="" style="width:350px; border-radius:25%;"><br><br>
                                <li style="font-size: 25px;"><img src="../img/lo.ico">Tizi-Ouzou, boulvard krim belkacem<br></li><img src="../img/tizi.jpg"   alt="" style="width:350px;  border-radius:25%;"><br><br>
                                <li style="font-size: 25px; margin-left:-65px;"><img src="../img/lo.ico">Alger, el-hamiz, dar el beida<br></li><img src="../img/alger.jpg"  alt="" style="width:350px;  border-radius:25%;"><br><br><br>
                            </center>
                            <button type="button" onclick="document.getElementById('id01').style.display='none'"
                            style="width:auto; background-color:red ;font-size:20px; color:white; padding:5px; cursor:pointer; margin-left:750px;" >Cancel</button><br>
                        </div>
                    </form>
                </div>
            </li>
            <li><a href="../connexion.php"><img src="../img/profil.ico" alt="" style="padding:1px;"></a></li>
            <li><a href="../home.php"><img src="../img/deconnexion.ico" alt="" style="padding:1px;"></a></li>
        </ul>
    </div>
</div>
        <!-- Fin header-->
 
<div class="main-container">
     <!--formulaire de modification-->
     <h2 class="gris"style="margin-top:100px; font-size:40px;"> Modification des informations du client</h2> <br>
      <div >
      <form  action="modifierclt_post.php" method="POST" style="margin-left:80px;">
      <input type="hidden" name="idc" value="<?=$client['id_clt'] ?>" > 
        <center class="profile"><img src="../img/1.png" alt="" style="border-radius:50%; margin-left: -400px ;margin-bottom: 15px ;  width:100px;height: 100px;"></center>
        <div class="ctn">
         <input class="inp" type="text" name="uname" placeholder="Nom d'utilisater" value="<?=$client['uname_clt'];?>" required > <br>
         <input class="inp" type="email"  name ="mail"   class="form-control"  placeholder="Entrez votre mail" value="<?=$client['email_clt'];?> "required><br>
         <input class="inp" type="password"   name="psw"  placeholder= "Enter votre mot de passe "  value="<?=$client['mdp_clt'];?>" required><br>
         <input class="inp" type="password" name="confpsw" placeholder="confirmer votre mot de passe " value="<?=$client['cmdp_clt'];?>" required><br><br>
         
         <button type="submit" onclick='return modifier();' style="width:auto; background-color:#10AC84;font-size:20px;
          color:white; padding:5px;  cursor:pointer;margin-left:650px;">Enregistrer les modifications</button>
        </div>
      </form>
      </div>
  </div>
    
</div>



    <!--Début du footer-->
    <?php include 'footer.php'?>
    </div><!--fin du footer-->
</div>
</div>  <!--Fin de wrapper-->

                       </body></html>
