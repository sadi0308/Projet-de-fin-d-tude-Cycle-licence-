<?php session_start() ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
         <meta charset="utf-8">
         <title>Espace admin</title>
         <link rel="stylesheet" href="../style.css">
         <script src="../js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
         </head>
<body>
<?php
require_once '../js/database.php';
if(!$_SESSION['admi']){
    header('location:connexadmin.php');
}

?>
<!--Début wapper-->
    <div class="wrapper">
        <!--début header -->
       <?php include 'header.php';?>   
            <!-- Fin header-->
            <?php include 'barreadmin.php';?>   
            <!-- debut sidebar -->
    
            <!-- fin sidebar -->
    <div class="main-container">
       <div><center> <br><br>
       <H1  style=" margin-bottom:150px, color: #22242A"> Bienvenue à l'espace d'administration,  <?=$_SESSION['admi']?><h1></center></div><br>
        <hr><br><br>
        <center > <h3 style="text-align: left;
            width: 80%;
            text-align:left;
            background-color: #efefef;
            padding: 2%;"><em>NB: Afin d'accéder à vos messages sur GMAIL veuillez introduire l'adresse mail et le mot de passe qui suivent:</em><br><br>
        Adresse mail : yourbigdeal2020@gmail.com<br>
        Mot de passe : adminbigdeal2020<br></h3>
        <div>
        <img src="../img/admini.jpg" alt="" style="width:300px; heigth:200px;">
        </div></center>
        
    
    <!--Début du footer-->
    <?php include 'footer.php';?>  
    <!--fin du footer-->
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