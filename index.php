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
    <form class="form-inline" action="/action_page.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button type="submit" class="btn btn-info"><span class="fa fa-search"></span> Chercher</button>
  </form>
</nav>
  <div class="container-fluid">
  	<div class="row">
  		<div class="col-md-8">
  			<h3 class="text-center text-dark mt-2">
  				Entre-Voisin
  			</h3>
  			<?php if(isset($_SESSION['response'])){ ?>
  			 <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
 <b><?= $_SESSION['response']; ?></b>
</div>
<?php } unset($_SESSION['response']); ?>
  		</div>
  	</div>
  </div>
  	<div class="row">
  		<div class ="col-md-4">
  			<h3 class="text-center text-info">
  				Nouvel Voisin
  			</h3>
  			<hr>
  			<form action="action.php" method="post" enctype="multipart/form-data">
  				<input type="hidden" name="id" value="<?= $id; ?>">
  				<div class="form-group">
  					<input type="text" name="nom"value="<?= $nom; ?>" class="form-control" placeholder="Entrer le nom..." required>
  				</div>
  				<div class="form-group">
  					<input type="email" name="email" value="<?= $email; ?>"class="form-control" placeholder="Entrer le mail..." required>
  				</div>
  					<div class="form-group">
  					<input type="tel" name="phone" value="<?= $phone; ?>"class="form-control" placeholder="Entrer le numéro de teléphone" required>
  				</div>
  				
  				<div class="form-group">
  					<input type="hidden" name="oldimage" value="<?=$photo; ?>">
  					<input type="file" name="image" class="custom-file">
  					<img src="<?= $photo; ?>"width="120" class="img-thumbnail">
  				</div>
  				
  				<div class="form-group">
  					<?php if ($update==true){ ?>
  						<input type="submit" name="update" class="btn btn-success btn-block" value="Mettre à jour">
  					<?php } else { ?>
  					<button class="btn btn-primary btn-block" type="submit" name='ajouter' value="Ajouer"><span class="fa fa-send" style="color:#4f4;"></span> Envoyer</button>
  				<?php } ?>
  				</div>
  				
  			</form>
  		</div>
  		<div class ="col-md-8">
  			<?php
  			$query ="SELECT * FROM phpcrud";
  			$stmt=$conn->prepare($query);
  			$stmt->execute();
  			$result=$stmt->get_result();
  			?>
  			<h3 class="text-center text-info">
  				Liste des voisins
  			</h3>
  			<table class="table table-hover">
    <thead>
      <tr>
      	<th>#</th>
        <th>Image</th>
        <th>Nom</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	<?php while ($row=$result->fetch_assoc()) { ?>
      <tr>
      	<td></td>
        <td><img src="<?= $row['photo']; ?>" width="50"></td>
        <td><?= $row['nom']; ?></td>
         <td><?= $row['email']; ?></td>
 		 <td><?= $row['phone']; ?></td>
 		  <td>
 		  	<a href="details.php?details=<?= $row['id']; ?>" class="badge badge-primary p-2">Details</a>
 		  	<a href="action.php?delete=<?= $row['id']; ?>" class="badge badge-danger p-2" onclick="return confirm('Voulez vous supprimer ce voisin?'); ">Supprimer</a>
 		  	<a href="index.php?edit=<?= $row['id']; ?>" class="badge badge-success p-2">Modifier</a>
 		  </td>
      </tr>
      <?php
  } ?>    
    </tbody>
  </table>
  		</div>
  	</div>
		</body>
		</html>