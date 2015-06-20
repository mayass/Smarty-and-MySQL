<?php
	
	// Inclure la classe de connexion
	include 'classes/classConnexionBDD.php';

	include 'classes/classTest.php';

	// On inclut la classe Smarty
	require("smarty/libs/Smarty.class.php"); 
	
	// On crée l'objet Smarty
	$tpl = new Smarty();


	// On crée une variable php initialisé à la valeur "Hello world !"
	$msg = "Hello world !";
	
	// On assigne à notre variable la valeur de $msg
	$tpl->assign("v_msg", $msg);

	// On récupére la lite des fruits
	$fruits = Test::getFruits();

	// On assgne a note variable la liste des fruits
	$tpl->assign("vy_fruits", $fruits);

	// On affiche la page 
	$tpl->display("vue/accueil/accueil.html");
?>