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
            <li><a href="../panier.php"><img src="../img/shop.ico" alt="" style="padding:1px;"></a></li>
            <li><a href="deconnexion.php"><img src="../img/deco.ico" alt="" style="padding:1px;"></a></li>
            <li><a href="../home.php"><img src="../img/deconnexion.ico" alt="" style="padding:1px;"></a></li>
        </ul>
    </div>
</div>