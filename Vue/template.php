





<?php
// session_start();
$value_status = 0;
if (isset($_SESSION["status"]))
{
  $value_status = $_SESSION["status"];
}

?>
<style>
  .count {
    width: 20px;
    height: 20px;
    border-radius: 10px;
    background-color: red;
    color: white;
    text-align: center;
    line-height: 20px;
    font-size: 12px;
    font-weight: bold;
    display: inline-block;
    position: relative;
    top: -10px;
    left: 5px;
}
footer{
  margin-top: 40%;
}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="/bootstrap-5.2.1-dist/"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Andada+Pro:ital@1&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Andada+Pro:ital@1&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
</head>
<body>
    
<!-- <nav class="navbar navbar-expand-lg bg-light "> -->
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <!--<a class="navbar-brand" href="#"><img src="./Logo_delta7.png" alt="Logo" width="30px"></a>-->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- <div class="navbar-collapse" style="background: linear-gradient(to right,rgb(120, 186, 240), rgb(241, 120, 140));"> -->
    <div class="navbar-collapse">
    
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <?php
          if($value_status == 2)
          {
      ?>
    <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=produitSalarie">Produit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=categoriess">Catégorie</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=marqueSalarie">Marques</a>
        </li>
       
                            <!-- <li> <span class="sup">3</span></li> -->
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=inscription">inscription</a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=getDeconnection">Deconnection</a>
        </li>
        

<?php
      }
         else 
          {
            ?>
            <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=accueil">Make Up Shop</a>
        </li>

<li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=produit">Produit</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=categories">Categ</a>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Categ
          </a>
          <ul class="dropdown-menu">
 
            <li><a class="dropdown-item" nam="libelle" href="index.php?action=produitCategorie&libelle=Yeux">Yeux</a></li>
            <li><a class="dropdown-item" nam="libelle" href="index.php?action=produitCategorie&libelle=Teint">Teint</a></li>
            <li><a class="dropdown-item" nam="libelle" href="index.php?action=produitCategorie&libelle=Sourcil">Sourcil</a></li>
            <li><a class="dropdown-item" nam="libelle" href="index.php?action=produitCategorie&libelle=Lèvres">Lèvres</a></li>
            <li><a class="dropdown-item" nam="libelle" href="index.php?action=produitCategorie&libelle=Pinceaux">Pinceaux</a></li>
            <li><a class="dropdown-item" nam="libelle" href="index.php?action=produitCategorie&libelle=Démaquillant">Démaquillant</a></li>
            <li><a class="dropdown-item" nam="libelle" href="index.php?action=produitCategorie&libelle=éponges">éponges</a></li>

    
          </ul>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=marques">Marques</a>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          marque
          </a>
          <ul class="dropdown-menu">
 
            <li><a class="dropdown-item" nam="libelle" href="index.php?action=produitMarques&libelle=Tarte">TARTE</a></li>
            <li><a class="dropdown-item" nam="libelle" href="index.php?action=produitMarques&libelle=YVES-SAINT-LAURENT">YVES SAINT LAURENT</a></li>
            <li><a class="dropdown-item" nam="libelle" href="index.php?action=produitMarques&libelle=Dior">DIOR</a></li>
            <li><a class="dropdown-item" nam="libelle" href="index.php?action=produitMarques&libelle=GUERLAIN">GUERLAIN</a></li>
            <li><a class="dropdown-item" nam="libelle" href="index.php?action=produitMarques&libelle=NATASHA-DENONA">NATASHA DENONA</a></li>
            <li><a class="dropdown-item" nam="libelle" href="index.php?action=produitMarques&libelle=MAKE-UP-FOR-EVER">MAKE UP FOR EVER</a></li>
            <li><a class="dropdown-item" nam="libelle" href="index.php?action=produitMarques&libelle=FENTY-BEAUTY">FENTY BEAUTY</a></li>
            <li><a class="dropdown-item" nam="libelle" href="index.php?action=produitMarques&libelle=SEPHORA-COLLECTION">SEPHORA COLLECTION</a></li>
            <li><a class="dropdown-item" nam="libelle" href="index.php?action=produitMarques&libelle=Huda-Beauty">HUDA BEAUTY</a></li>
            

    
          </ul>
        </li>
        <li class="nav-item rounded">
                                <a class="nav-link" href="index.php?action=panier" ><span class="counted-word">Panier <?php
                                        if(isset($_SESSION['cart']['quantite'])){
                                         // var_dump($_SESSION['cart']['quantite']);
                                             echo '<span class="count">'.$_SESSION['cart']['quantite'].'</span>';
                                        }else{
                                            echo '<span class="count">0</span>';
                                        }
                                        ?>
                                        </span>
                                </a>
                            </li>
       
        
          <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=cnx1">Connection</a>
        </li>
        </ul>
         <form class="d-flex" method="post" action="index.php?action=rechercherProduit" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" name="libelle" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
        <!-- <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=getDeconnection">Deconnection</a>
        </li> -->
        
        <?php 
      } 
    
    
      ?>
              
      

</div>
</div>
</nav>
<main>
<div class="container">
 
    <?= $logo ?>
    <br>
    <br>
    <br>
    </div>


</main>
<footer>
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <!--<a class="navbar-brand" href="#"><img src="./Logo_delta7.png" alt="Logo" width="30px"></a>-->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- <div class="navbar-collapse" style="background: linear-gradient(to right,rgb(120, 186, 240), rgb(241, 120, 140));"> -->
    <div class="navbar-collapse">
    
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=CGV">CGV</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=CGU">CGU</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php?action=presentation">Presentation de notre marque</a>
        </li>
    <li class="nav-item">
          <a class="nav-link" aria-current="page"  href="#" >&copy; Fait par Noa Sillam</a>
        </li>

<!-- <p >&copy; Fait par Noa Sillam</p> -->

</ul>
</div>
</div>
</nav>
</footer>

</body>
</html>


