<?php

    include("connexion_bdd.php");

    if (isset($_POST["submit"])){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mot_passe = $_POST['mot_passe'];
    $confirmer = $_POST['confirmer_passe'];

    $query = "INSERT INTO `admine` (`nom`, `prenom`, `email`, `mot_passe`) 
    VALUES ('$nom', '$prenom', '$email', '$mot_passe')";

    $resultat = mysqli_query ($connexion, $query);

    if ($resultat){
        echo "enregistrement reçut";
    }
    else {
        echo "enregistrement echouer";
    }
    }




?>