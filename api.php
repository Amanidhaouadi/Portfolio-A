<?php
$_serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "messages_bd";
$connection = mysqli_connect($_serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

   if (isset($_POST['messages_bd'])) {
       if (!empty($_POST['mail']) && !empty($_POST['desc'])) {
           $mail = $_POST['mail'];
           $desc = $_POST['desc'];
           $req = $bdd->prepare('INSERT INTO contact (mail, descripttion) VALUES (?, ?)');
           $res = $req->execute([$mail, $desc]);
           if ($res) {
               echo "Data inserted successfully";
           } 
           else {
               echo "Error inserting data";
        }
    }
}
