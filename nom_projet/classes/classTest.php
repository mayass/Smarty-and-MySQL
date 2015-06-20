<?php

	// Création de la classe
	class Test
	{
		//Méthode permettant de récupérer la liste des fruits
		public static function getFruits()
		{
			//Connexion à la base de données
			$bdd = classConnexionBDD::connect();

			//Requête permettant de récupérer la liste des fruits 
			$sql = "SELECT FRUIT FROM TB_FRUITS "; 
			
			//Exécution de la reqête
			$req = $bdd->query($sql);
			
			//Récupération du résultat de la requête
			while ($data = $req->fetch())
			{
				$liste_fruits[] = array('fruit' => $data["FRUIT"]);
		}

			//On returne les informations récupérés
			return $liste_fruits;
		}
	}
	
?>