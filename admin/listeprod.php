<!-- la page liste produits -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
         <meta charset="utf-8">
         <title>Espace admin</title>
         <link rel="stylesheet" href="../style.css">
         <script type="text/javascript" src="../js/script.js"></script>
         <script type="text/javascript" src="../js/home.js"></script>
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
            
        <!-- debut sidebar admin--> 
        <?php include 'barreadmin.php'?>
        <!-- fin sidebar admin-->
           
    <div class="main-container">
    <div><center> <br><br>
       <H1  style=" margin-bottom:150px, color: #22242A"> Gestion des produits<h1></center></div><br>
        <hr><br><br>
    
        <center > <h3 style="text-align: left;
            width: 80%;
            text-align:left;
            background-color: #efefef;
            padding: 2%;"><em>NB: Afin d'accéder à vos messages sur GMAIL veuillez introduire l'adresse mail et le mot de passe qui suivent:</em><br><br>
        Adresse mail : yourbigdeal2020@gmail.com<br>
        Mot de passe : adminbigdeal2020<br></h3><br><br><br></center>
        <div >
        <form action = "rechercheprod.php" method = "GET">
            <input type = "search" name ="terme" placeholder="Rechercher l'id, titre, prix, desgnation ... " style="width:350px; margin-left:850px; padding:4px; border-radius:25px; font-size:18px; margin-bottom:10px;"><br>
            <input type = "submit" name ="s" value = "Rechercher" style="width:auto; background-color:#10AC84; font-size:19px; 
            color:white;padding:5px; margin-left:1089px; cursor:pointer;" ><br><br>
        </form>
      </div>

<!--FORMULAIRE MODAL D'AJOUT DE PRODUITS-->

<button onclick="document.getElementById('id02').style.display='block'" 
style="width:auto; background-color:#10AC84; font-size:19px; 
color:white;padding:5px;  margin-left:64px;cursor:pointer;" >Ajouter un produit</button><br> <br>
<div id="id02" class="modal"> 
  
  <form class="modal-content animate" action="ajouterproduit.php" method="POST">
    <div class="imgcontainer"><br>
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="ctn">
    <img src="../img/1.png" alt="" style="border-radius:50%; margin-bottom: 15px ;margin-left: 470px ;  width:100px;height: 100px;">
        <center>
         <input class="inp" type="text" name="ref" placeholder="référence du produit"  required > <br>
         <div >
                            <select name="cat" class="inp"   required>
                                <option value="PC&ORDINATEURS">PC&ORDINATEURS</option>
                                <option value="périphérique">périphérique</option>
                            </select>
         </div>
         <input class="inp"type="text" name="titre" placeholder="titre du produit"  required > <br>
         <textarea class="inp"type="text" name="desg" placeholder="designation du produit"  required ></textarea> <br>
         <textarea class="inp" type="txt" name="photo"  placeholder="URL de la photo du produit EXEMPLE: images/nom de l'image"  required ></textarea> <br>
         <input class="inp"type="text" name="prix" placeholder="prix du produit"  required > <br>
         <input class="inp"type="text" name="stock" placeholder="stock du produit" required > <br></center>
 </div>

    <div class="ctn" style="background-color:#f1f1f1">
      <button type="submit" style="width:auto; background-color:#10AC84;
      font-size:20px; color:white; padding:5px;  cursor:pointer;margin-left:820px;" >Ajouter</button>
      <button type="button" onclick="document.getElementById('id02').style.display='none'"
       style="width:auto; background-color:red ;font-size:20px; color:white; padding:5px; cursor:pointer;" >Cancel</button>
    
    </div>
  </form>
</div>


     <table>
        <tr>
            <th width="5%">ID</th>
            <th width="10%">réf</th>
            <th width="10%">cat</th>
            <th width="10%">titre</th>
            <th width="25%">desg</th>
            <th width="20%">photo</th>   
            <th width="10%">prix</th>
            <th width="10%">stock</th>
            <th>Action 1</th>
            <th>Action 2</th>
        </tr>
    
    <?php
    $conn =mysqli_connect("localhost","root", "", "based");
    if($conn-> connect_error){
        die("Connexion failed:" .$conn-> connect_error);
    }

    $sql ="SELECT * FROM produit ";
    $result = $conn->query($sql);

    if ($result-> num_rows > 0){
        while ($row =$result-> fetch_assoc()){
            echo"
            <tr>
                 <td>".$row["id_prod"]."</td>
                 <td>".$row["ref_prod"]."</td>
                 <td>".$row["cat_prod"] ."</td>
                 <td>".$row["titre_prod"]."</td>
                 <td>".$row["desg_prod"]."</td>
                 <td>".$row["photo_prod"]."</td>
                 <td>".$row["prix_prod"]."</td>
                 <td>".$row["stock_prod"]."</td>
                 
                <td><a href='supprprod.php?idc=".$row["id_prod"]."'  class='btn btn-dg'  onclick ='return confirmation();' style='border: red solid 1px;
                 background-color:red; color:white; padding:3px;'>Supprm</a></td>

                <td><a href='modifierprod.php?idc=".$row["id_prod"]."' class='btn btn-pr' style='border: blue solid 1px;
                 background-color:blue; color:white;padding:3px;'>Modifier</a></td>
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
    <?php include 'footer.php'?>
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

<script>
var modal = document.getElementById('id02');
// si lutilisateur clique ailleurs ca ferme
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


</div>  <!--Fin de wrapper-->

                       </body></html>