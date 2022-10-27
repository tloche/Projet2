<?php 
error_reporting(0);
session_start();

if (isset($_POST['enregistrer'])){ // Si on appuie sur le bouton d'nevoie de données

  // On stock les vameurs envoyées dans des variables
  $nom = $_POST['nom'];
  $email = $_POST['email'];
  $objet = $_POST['objet'];
  $message =sha1($_POST['message']);//mot de passe crypté en sha1

  // Et on les envoie à la base de données
  $sql = "INSERT INTO utilisateurs (nom, prenom, email, mdp) VALUES ('$nom','$prenom','$email','$password')"; 
  $result = mysqli_query($conn, $sql);

}
?>