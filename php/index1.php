<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-widtht, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/auden.css">
    <title>AUF</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid"> 
          <a class="navbar-brand" href="./index.html">
              <img src="../images/auf.jpg" width="250px" height="130px" alt="">
          </a>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="">
                Agence Universitaire de la <br> Francophonie</a>
              </li>
            </ul>
          </div>
        </div>
    </nav> 
<br> <br>


    <center>
      <h3>AUTHENTIFICATION</h3>
    </center>
 
    <?php
include ("connexion_bdd.php");
?>
    <center>
    <form action="./authen.php" method="post" class="">
      <input required type="email" name="email" id="email" class="formulaire" placeholder="entrez votre email"><br>
      <input required type="text" name="mot_passe" id="mot_passe" class="formulaire" placeholder="entrez mot de passe"> <br>
   <br>
  </form>
  </center>
  <br>
  <center>
    <a href=""><input type="submit" value="se connecter"class="formulai" name="submit"> </a>
    <a href="./index2.php"><input type="submit" value="s'inscrire"class="formula" name="submit"></a>
  </center>

    <br><br>
  
<div class="footer1">    
   <ul class="nav justify-content-center">
     <li class="nav-item">
       <a class="nav-link foot" aria-current="page" href="#">Contact <br> Mentions légales <br> Politique de <br> Confidentialité </a>
     </li>
     <li class="nav-item">
       
       <a class="nav-link foot" href="#"> <br> <br> <br> ABONNEZ-VOUS</a>
     </li>
     <li class="nav-item">
       <a class="nav-link foot">Abonnez-vous <br> à l'infolette de <br> l'AUF International</a>
     </li>
   </ul>


   <div class="mx-auto" style="width: 300px;">
     <a href="https://m.facebook.com/aufinternational" target="_blank"> <img src="../images/19-44-02-78dbc9c84d0124b0b9f63b896b12b3f1.png" width="30px" height="30px" alt=""> </a>
     AUF 2022 tous droits réservés
      <a href="https://twitter.com/auf_org" target="_blank" >  <img src="../images/twitter-logo.png" width="30px" height="30px" alt=""></a>
   </div>
</div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>