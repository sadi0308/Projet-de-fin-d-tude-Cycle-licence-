<?php
try
{
 $bdd = new PDO("mysql:host=localhost;dbname=based", "root", "");
 $bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
  die("Une erreur a été trouvé : " . $e->getMessage());
}

$bdd->query("SET NAMES UTF8");


if (isset($_GET["s"]) AND $_GET["s"] == "Rechercher")
{
 $_GET["terme"] = htmlspecialchars($_GET["terme"]); //pour sécuriser le formulaire contre les intrusions html
 $terme = $_GET["terme"];
 $terme = trim($terme); //pour supprimer les espaces dans la requête de l'internaute
 $terme = strip_tags($terme); //pour supprimer les balises html dans la requête
 if (isset($terme))
 {
  $terme = strtolower($terme);
  $select_terme = $bdd->prepare("SELECT id_prod, ref_prod, cat_prod, titre_prod, desg_prod, prix_prod, stock_prod
   FROM produit WHERE id_prod LIKE ?  OR ref_prod LIKE ? OR  cat_prod LIKE ?  OR  titre_prod LIKE ?
     OR  desg_prod LIKE ?  OR  prix_prod LIKE ?  OR  stock_prod LIKE ?");
  $select_terme->execute(array("%".$terme."%", "%".$terme."%", "%".$terme."%", "%".$terme."%", "%".$terme."%", "%".$terme."%", "%".$terme."%"));
}
 else
 {
  $message = "Vous devez entrer votre requete dans la barre de recherche";
 }
}


?>




<!--RECHERCHE DANS LA PAGE PRODUITS-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
         <meta charset="utf-8">
         <title>Recherche Produit</title>
         <link rel="stylesheet" href="../style.css">
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"  charset="utf-8"></script>
         <script type="text/javascript" src="./js/home.js"  ></script>
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
                 .title2{
                text-align: center;
                color: #66afe9;
                background-color: #efefef;
                padding: 2%;
                font-size:40px;
        }
          </style>
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
                 <li><a href="home.php"><img src="img/deconnexion.ico" alt=""></a></li>
                
            </div>
        </div>
        <!-- Fin header-->
        <div class="contenu" style="text-align: left; width: 80%; text-align:left; background-color: #efefef;padding: 2%; margin-left:150px;">
        <h3 class="title2">Résultat de votre recherche sur la liste des produits :<br></h3><br><br><br>
     
         <?php
            if(empty($_GET["terme"]))
            {
            echo  '<div class="alert-erreur" style="margin-top: -50px;">
            <span>Vous devez entrer votre requete dans la barre de recherche.</span>
            </div><br><br>';
            }?>
            <br><br>
            
         <?php
           echo'<table>
           <tr>
           <th width="5%">ID</th>
           <th width="10%">réf</th>
           <th width="10%">cat</th>
           <th width="15%">titre</th>
           <th width="35%">desg</th>   
           <th width="15%">prix</th>
           <th width="10%">stock</th>
           <th>Action 1</th>
           <th>Action 2</th>
             </tr>';

            while($terme_trouve = $select_terme->fetch())
            {
            echo"
            <tr>
            <td>".$terme_trouve["id_prod"]."</td>
            <td>".$terme_trouve["ref_prod"]."</td>
            <td>".$terme_trouve["cat_prod"] ."</td>
            <td>".$terme_trouve["titre_prod"]."</td>
            <td>".$terme_trouve["desg_prod"]."</td>
            <td>".$terme_trouve["prix_prod"]."</td>
            <td>".$terme_trouve["stock_prod"]."</td>
            
           <td><a href='supprprod.php?idc=".$terme_trouve["id_prod"]."'  class='btn btn-dg'  onclick ='return confirmation();' style='border: red solid 1px;
            background-color:red; color:white; padding:3px;'>Supprm</a></td>

           <td><a href='modifierprod.php?idc=".$terme_trouve["id_prod"]."' class='btn btn-pr' style='border: blue solid 1px;
            background-color:blue; color:white;padding:3px;'>Modifier</a></td>
                </tr>
                ";
            }
            $select_terme->closeCursor();
            ?>
</table>
    </div><!--fin de contenur-->
</div>  <!--Fin de wrapper-->
</body>
</html>

                       
   

