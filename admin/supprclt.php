<?php 
include('../js/database.php'); 
        //Récupération de l'id  du client à supprimer
       
        $sup = $_GET['idc'];
        $s=$db->query('DELETE FROM client WHERE id_clt = '.$sup);  
        
        include('listeclt.php'); 
?>
