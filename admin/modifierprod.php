<?php
$db= new PDO('mysql:host=localhost;dbname=based','root','');
$pdoStat = $db->prepare('SELECT * FROM produit WHERE id_prod= :num');
$pdoStat->bindValue(':num',$_GET['idc'], PDO::PARAM_INT);
$executeIsOk = $pdoStat->execute();
$produit = $pdoStat->fetch();
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
         <meta charset="utf-8">
         <title>Modifier un produit</title>
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
     <h1 class="gris" style="margin-top:100px;"> Modification des informations du produit ID: <?=$produit['id_prod'] ?>  </h1>
      <form  action="modifierprod_post.php" method="POST" style="margin-left:80px;">
      <input type="hidden" name="idc" value="<?=$produit['id_prod'] ?>" > <br><br>

        <img src="../img/1.png" alt="" style="border-radius:50%; margin-bottom: 15px ;margin-left: 380px ;  width:100px;height: 100px;">
       <div class="ctn">
         <input class="inp" type="text" name="ref" placeholder="référence du produit" value="<?=$produit['ref_prod'];?>" required > <br>
         <div >
                            <select name="cat" class="inp"  value="<?=$produit['cat_prod'];?>" required>
                                <option value="PC&ORDINATEURS">PC&ORDINATEURS</option>
                                <option value="périphérique">périphérique</option>
                            </select>
         </div>
         
         <input class="inp" type="text" name="titre" placeholder="titre du produit"  value="<?=$produit['titre_prod'];?>" required > <br>
         <textarea class="inp" type="text" name="desg" placeholder="designation du produit" value="<?=$produit['desg_prod'];?>" required ></textarea> <br>
         <textarea class="inp" type="text" name="photo" placeholder="photo du produit" value="<?=$produit['photo_prod'];?>" required ></textarea> <br>
         <input class="inp" type="text" name="prix" placeholder="prix du produit" value="<?=$produit['prix_prod'];?>" required > <br>
         <input class="inp" type="text" name="stock" placeholder="stock du produit" value="<?=$produit['stock_prod'];?>" required > <br><br>
         
         <button type="submit" onclick='return modifier();' style="width:auto; background-color:#10AC84;font-size:20px;
          color:white; padding:5px;  cursor:pointer;margin-left:545px;">Enregistrer les modifications</button><br><br>
      </div>  
      </form>
      </div>
  </div>
    
</div><br><br><br><br><br><br><br><br>

<!--Début du footer-->
<?php include 'footer.php'?>
    </div><!--fin du footer-->
</div>
</div>  <!--Fin de wrapper-->

                       </body></html>
