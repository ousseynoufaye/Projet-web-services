<?php 
include 'action.php';
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content='Sahil Kumar'>
  <meta http-equiv="X-UA-Compatible" content ="IE=edge">
  <meta name ="viewport" content="width=device-width, initial-scale=1,
  shrink-to-fit=no">
  <title>Entre-voisin</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="logo.css">
<link rel="stylesheet" href="details.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </head>
    <body>
      <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
 
  <a class="navbar-brand" href="#" ><img src="image/voisin.jpg" class="img-responsive logo"></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ">
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
</div>
</div>
    <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button type="submit" class="btn btn-info"><span class="fa fa-search"></span> Chercher</button>
  </form>
</nav>
<div class="container bg-primary text-white">
  <div class="row justify-content">
    <div class="col-md-12 mt-14 bg-info p-6 rounded">
      <div >
        <h2 class="bg-primary p-4 rounded text-center ">ID : <?= $vid; ?>
          
        </h2>
        <div class="text-center">
          <img src=" <?= $vphoto; ?>" width="400" class="img-thumbnail">
          <div>
          <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">

<label for="id-of-input" class="custom-checkbox text-center">
  <input type="checkbox" id="id-of-input"/>
  <i class="glyphicon glyphicon-star-empty"></i>
  <i class="glyphicon glyphicon-star"></i>
  </div>

</label>

        </div>
        <h4 class="text-light">
          Name : <?= $vnom; ?>
        </h4>
        <h4 class="text-light">
          email : <?= $vemail; ?>
        </h4 >
        <h4 class="text-light">
          phone: <?= $vphone; ?>
        </h4>
       
      </div>
      
    </div>
    
  </div>
  
</div>
</body>
</html>