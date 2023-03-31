<!--Script de déconnexion-->
<?php 
	session_start(); 
	session_unset();
	//Destruction de la session
	session_destroy();

	//On renvoie l'utilisateur sur la page d'acceuil
	header('Location:../home.php');
 ?>