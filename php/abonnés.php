<?php

include ("./connexion_bdd.php")
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/styl1.css">
    <title>AUF</title>
  </head>
  <body>
    <img src="./images/auf.jpg" alt="" >
  <h2>liste des abonnés</h2>

  <?php
$query = "SELECT * FROM `abonnés` order by nom";
$result = mysqli_query ($connexion,$query);
if ($result){
    echo '
    <table class="table caption-top">
    <thead>
    <tr>
      <th scope="col">N</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Date de naissance</th>
      <th scope="col">Numero</th>
      <th scope="col">Email</th>
      <th scope="col">Date de debut</th>
    </tr>
  </thead>
    ';
    $nu = 1;
    while ($data= mysqli_fetch_assoc($result)){
        echo '
        <tr>
        <th scope="row">'.$nu.'</th>
        <td>'.$data["nom"].'</td>
        <td>'.$data["prenom"].'</td>
        <td>'.$data["age"].'</td>
        <td>'.$data["numero"].'</td>
        <td>'.$data["email"].'</td>
        <td>'.$data["debut"].'</td>
      </tr>
        ';
        $nu+=1;
    }
    echo '
    </tbody>
</table>
    ';
}


?>

  
<a href="../index.html" class="retour"> Retour </a>
  

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  
  </body>
</html>