<!--PAGE CONTACT VIA GMAIL EN UTILISANT PHPMAILER ET STMP-->
<?php include 'sendemail.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Contact</title>
         <link rel="stylesheet" href="../style.css">
         <link rel="stylesheet" href="style.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs">
    </head>
<body>


 <!--alert messages -->
 <?php echo $alert; ?>
<div style="margin-top:100px;">
    <!--Début de la section contact-->
    <div class="contact-section" style="margin-bottom:100px;">
      <div class="contact-info" style="font-size: 22px;">
        <div ><img src="../img/lo.ico" alt="" style="margin-left:-58px; margin-bottom:-67px;" >
              <li style="margin-left:-10px;">Azazga, boulvard Ahmed Zaidat</li>
              <li style="margin-left:-10px;">Tizi-Ouzou, boulvard krim belkacem</li>
              <li style="margin-left:-10px;">Alger, el-hamiz, dar el beida</li>
        </div>
        <div style="display: inline-flex; align-items:center;margin-left:-55px;"><img src="../img/nouveau.ico" alt="" ><span style="margin-left:10px;">yourbigdeal2020@gmail.com</span></div><br>
        <div style="display: inline-flex; align-items:center;margin-left:-55px;"><img src="../img/appel.ico"alt="" ><span style="margin-left:10px;">0 26 25 14 06</span></div><br>
        <div style="display: inline-flex; align-items:center;margin-left:-55px;"><img src="../img/time.ico"alt=""  ><span style="margin-left:10px;">Samedi-Vendredi 8:00 AM à 6:00 PM</span></div>
      </div>
      
      <div class="contact-form">
        <h2>CONTACTEZ-NOUS</h2>
        <form class="contact" action="" method="post">
          <input type="text" name="name" class="text-box" placeholder="Entrer votre nom" required>
          <input type="email" name="email" class="text-box" placeholder="Entrer votre Email" required>
          <textarea name="message" rows="5" placeholder="Ecrire votre Message" required></textarea>
          <input type="submit" name="submit" class="send-btn" style="background-color:#10AC84;" value="Envoyer">
        </form>
      </div>
    </div>
    <!--Fin de la section contact-->

 <!--Début du footer-->
 <?php  include '../admin/footer.php' ?>
 <!--Début du footer-->
</div>

    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>


                       </body></html>