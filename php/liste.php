<?php
include ("connexion_bdd.php");

if (isset($_POST["submit"])){

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $age = $_POST["age"];
    $numero = $_POST["numero"];
    $email = $_POST["email"];
    $date = $_POST["date"];


    $query = "INSERT INTO `abonnés` (`nom`, `prenom`, `age`, `numero`, `email`, `debut`) 
    VALUES ('$nom', '$prenom', '$age', '$numero', '$email', '$date')";

    $resultat = mysqli_query ($connexion, $query);

    if ($resultat){
        echo "enregistrement reçut";
        header ("Location: ../index.html");
        excit;
    }
    else {
        echo "enregistrement echouer";
    }
}
?>