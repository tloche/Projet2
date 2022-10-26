<?php

   // ICI DOIT APPARAITRE LA CONNECTION AVEC LA BASE DE DONNEES
   // ET LA GESTION DES ERREURS
   
   try{
      $bdd = new PDO('mysql:host=localhost;dbname=formulaire;charset=utf8' , 'root' , 'root');
  } catch (Exception $e) {
      die('Erreur :'. $e->getMessage());
  }

?>