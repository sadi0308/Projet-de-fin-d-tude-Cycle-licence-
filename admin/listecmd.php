
<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
         <meta charset="utf-8">
         <title>Espace admin</title>
         <link rel="stylesheet" href="../style.css">
         <script type="text/javascript" src="../js/script.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
         <style type= "text/css">
            table{border-collapse:collapse;
                 margin-left:5%;
                 width:90%;
                 color:#22242A;
                 font-size:20px;
                 text-align:left;}
                 th{background-color:#22242A;
                 color:white;
                padding:10px;}
                td{padding:10px;}
                 tr:nth-child(even) {background-color:#f2f2f2}
        
                 </style>
         </head>
<body>
<?php


?>
<!--Début wapper-->
    <div class="wrapper">
                  <!-- debut header-->
                  <div class="header">
        <div class="header-menu">
        <div class="title"> 
            <a href="home.php"> Big</a><span> Deal </span>
        </div>
  
        <div class="sidebar-btn">
            <img src="../img/menu.ico" alt="" >
        </div>

        <form action = "recherche.php" method = "GET">
            <div id="rolling_bar" >
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
            <li><a href="deconnexion.php"><img src="../img/deco.ico" alt="" style="padding:1px;"></a></li>
            <li><a href="../home.php"><img src="../img/deconnexion.ico" alt="" style="padding:1px;"></a></li>
        </ul>
    </div>
</div>
<!--fin header-->
            <!-- debut sidebar --> 
            <?php include 'barreadmin.php';?>
            <!-- fin sidebar -->
    

    <div class="main-container">
    <div><center> <br><br>
       <h1  style=" margin-bottom:150px, color: #22242A"> Gestion des commandes</h1></center></div><br>
        <hr><br><br>
   
       <center > <h3 style="text-align: left;
            width: 80%;
            text-align:left;
            background-color: #efefef;
            padding: 2%;"><em>NB: Afin d'accéder à vos messages sur GMAIL veuillez introduire l'adresse mail et le mot de passe qui suivent:</em><br><br>
        Adresse mail : yourbigdeal2020@gmail.com<br>
        Mot de passe : adminbigdeal2020<br></h3><br><br><br><br><br></center>
      

    <table>
        <tr> 
            <th>id_commande</th>
            <th>quantité commandée</th>
            <th>Date de commande</th>
            <th>Action 1</th>
            <th>Action 2</th>
        </tr>
    
    <?php
    $conn =mysqli_connect("localhost","root", "", "based");
    if($conn-> connect_error){
        die("Connexion failed:" .$conn-> connect_error);
    }

    $sql ="SELECT * FROM commande";
    $result = $conn->query($sql);
    if ($result-> num_rows > 0){
        while ($row =$result-> fetch_assoc()){
            echo"
            <tr>
           
                 <td>".$row["id_cmd"]."</td>
                 <td>".$row["quant_cmd"]."</td>
                 <td>".$row["date_cmd"] ."</td>
                
                <td><a href='supprcmd.php?idc=".$row["id_cmd"]."'  class='btn btn-dg'  onclick ='return confirmation();' style='border: red solid 1px;
                 background-color:red; color:white; padding:3px;'>Supprimer</a></td>

                <td><a href='imprimercmd.php?idc=".$row["id_cmd"]."' class='btn btn-pr' style='border: blue solid 1px;
                 background-color:blue; color:white;padding:3px;'>Imprimer</a></td>
                </tr>";
        }
        echo"</table>";
    }
    else{
        echo "0 result";
    }
    $conn-> close();
    
    ?><br><br><br>
    

    <!--Début du footer-->
<div class="footer">
    <div class="footer-container">
        <div class="footer-section1">
          <div class="title">Big<span style= "color: #4CCEE8" > Deal </span>
          </div><br>
           <p >Big Deal, votre boutique de vente en ligne d'ordinateurs,
           pc et leurs périphériques.
           Plein de choix, livraison immédiate. 
           Pour plus d'info veuillez cliquer sur : <br> <br> </p> 
           <div style="margin-left: 80px;" >
              <a href="Apropos.html" class="menu-btn">
             <img src="../img/info.ico" alt=""><span>A propos</span> </a>
         </div>
           
          </div>
<!-- fin de la section une!-->
        <div class="footer-section2">
            <h2>Nos services</h2>
            <br>
            <ul>
              <a href="home.html"><li>Home</li></a>
              <a href="Pc&ordinateur.html"><li>PC & ordinateurs</li></a>
              <a href="peripherique.html"><li>Périphériques</li></a>
              <a href="promotion.html"><li>Promotions</li></a>
          </ul>
          </div>
<!--fin de la section deux!-->
        <div class="footer-section3">

            <h2>Contactez-nous</h2><br>
            <div style="display: inline-flex; align-items:center;">
              <img src="appel.ico"alt=""><span style="margin-left:4px;">0 26 25 14 06</span>
          </div><br> <br>
          <div style="display: inline-flex; align-items:center;" >
               <img src="../img/nouveau.ico" alt=""><span>Bigdeal2020@gmail.com</span>
          </div><br> <br>
          <div>
               <a href="contact.html" class="menu-btn">
              <img src="../img/message.ico" alt=""><span>Contact</span> </a>
          </div>
                  <span >Suivez-nous sur: </span>   
           <div style="margin-top:15px;">
              
               <a href="https://www.facebook.com/"><img src="../img/facebook.png" alt="" style=" height: 30px; width: 30;"></a>
               <a href="https://www.linkedin.com/"><img src="../img/linkedin.png" alt="" style=" height: 30px; width: 30;"></a>
               <a href="https://www.pinterest.com/"><img src="../img/pinterest.png" alt="" style=" height: 30px; width: 30;"></a>
               <a href="https://www.twitter.com/"><img src="../img/twitter.png" alt="" style=" height: 30px; width: 30;"></a>
               <a href="https://www.tumblr.com/"><img src="../img/tumblr.png" alt="" style=" height: 30px; width: 30;"></a>
               </li>
           </div>

      </div><!--fin de la section trois!-->
</div><!--Fin du contenu footer-->
</div><!--fin du footer-->
</div><!--fin de main-container-->
</div>  <!--Fin de wrapper-->



<!--script pour la barre menu de l'interieur-->
<script type="text/javascript">
$(document).ready(function(){
    $(".sidebar-btn").click(function(){
        $(".wrapper").toggleClass("collapse");
    });
});
</script>


</div>  <!--Fin de wrapper-->

                       </body></html>