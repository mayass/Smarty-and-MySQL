<?php
  // Classe de connexion � la base de donn�es
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

        // Cr�ation de l'objet de connexion
        $connection = new PDO($dns, $utilisateur, $motDePasse);

        // Retourner l'objet cr�er
        return $connection;
      } 
      catch (Exception $e) 
      {
        // Gestion des exceptions
        echo "Connection � MySQL impossible : ", $e->getMessage();
      }
    } 
  }
?> 