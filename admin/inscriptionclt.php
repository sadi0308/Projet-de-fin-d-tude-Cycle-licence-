<!--PAGE D'INSCRIPTION DES CLIENTS -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
         <meta charset="utf-8">
         <title>Inscription</title>
         <link rel="stylesheet" href="../style.css">
    </head>
<body>
 <!--Début wapper-->
    <div class="wrapper">

         <!--début header -->
        <?php  include 'header.php' ?>
        <!-- Fin header-->
        
 
    <div class="main-container">
        <!--formulaire d'inscription-->
        <div class="inscrip">
            <form id="inscription" action="insertionclt.php" method="POST">
                <h2> S'inscrire </h2>
                <center class="profile"><img src="../img/1.png" alt="" style="border-radius:50%; margin-bottom: 15px ;margin-bottom: 15px ;  width:100px;height: 100px;"></center>
                <input type="text" name="uname" value="" placeholder="Nom d'utilisater" required> <br>
                <input type="email"  name ="mail"   class="form-control"  placeholder="Entrez votre mail" required><br>
                <input type="password"   name="psw"  placeholder= "Enter votre mot de passe "  required><br>
                <input type="password" name="confpsw" placeholder="confirmer votre mot de passe "  required><br>
                <input type="text" name="qest" placeholder="Quel est votre meilleur(e) ami(e)?"  required><br>
                <button type="submit" value="S'inscrire"  class=" btn" name="register" class="logbtn"> Valider</button><br><hr><br>
                <label style="color:#fff">
                    <input type="checkbox" checked="checked" name="remember" id="remember" class="btn"style="width:5%;"> 
                    Je souhaite m'inscrire afin recevoir toute l’information 
                    produit,  les nouveautés, promotions et les réductions
                    exclusives proposées aux abonnés ! </label>
            </form>
</div>
    </div><br><br><br><br><br><br><br><br><br>
    
      <!--Début du footer-->
      <?php  include 'footer.php' ?>
     <!--Fin du footer-->

    </div>  <!--Fin de wrapper-->
</body></html>