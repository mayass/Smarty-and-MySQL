<?php
  // Classe de connexion à la base de données
  class classConnexionBDD
  {
    // Fonction de connexion 
    static function  connect()
    {
      try 
      {
        // Initialisation des variables de connexions
        $dns = 'mysql:host=localhost;dbname=bdd_test';
        $utilisateur = 'login';
        $motDePasse = 'password';

        // Création de l'objet de connexion
        $connection = new PDO($dns, $utilisateur, $motDePasse);

        // Retourner l'objet créer
        return $connection;
      } 
      catch (Exception $e) 
      {
        // Gestion des exceptions
        echo "Connection à MySQL impossible : ", $e->getMessage();
      }
    } 
  }
?> 