<?php 
include('../js/database.php'); 
        //Récupération de l'id  du produit à supprimer
       
        $sup = $_GET['idc'];
        $s=$db->query('DELETE FROM produit WHERE id_prod = '.$sup);  
        include('listeprod.php'); 
?>
