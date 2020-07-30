<?php 
session_start();
include 'config.php';


$update=false;
$id="";
$nom="";
$email="";
$phone="";
$photo="";


if(isset($_POST['ajouter'])){
	$nom=$_POST['nom'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	

	$photo=$_FILES['image']['name'];
	$upload="uploads/".$photo;

	$query="INSERT INTO phpcrud(nom,email,phone,photo)VALUES(?,?,?,?)";
	$stmt=$conn->prepare($query);
	$stmt->bind_param("ssss",$nom,$email,$phone,$upload);
	$stmt->execute();
	move_uploaded_file($_FILES['image']['tmp_name'], $upload);
	header('location:index.php');
	$_SESSION['response']="Votre nouvel voisin a été bien enregistré!";
	$_SESSION['res_type']="success";

}
if(isset($_GET['delete'])){
	$id=$_GET['delete'];

	$sql="SELECT photo FROM phpcrud WHERE id=?";
	$stmt2=$conn->prepare($sql);
	$stmt2->bind_param("i",$id);
	$stmt2-> execute();
	$result2=$stmt2->get_result();
	$row=$result2->fetch_assoc();

	$imagepath=$row['photo'];
	unlink($imagepath);


	$query="DELETE FROM phpcrud WHERE id=?";
	$stmt=$conn->prepare($query);
	$stmt->bind_param("i",$id);
	$stmt->execute();

	header('location:index.php');
	$_SESSION['response']="La suppression a été bien effectuée!";
	$_SESSION['res_type']="danger";
}
if(isset($_GET['edit'])){
	$id=$_GET['edit'];

	$query="SELECT * FROM phpcrud WHERE id=?";
	$stmt=$conn->prepare($query);
	$stmt->bind_param("i",$id);
	$stmt->execute();
	$result=$stmt->get_result();
	$row=$result->fetch_assoc();

	$id=$row['id'];
	$nom=$row['nom'];
	$email=$row['email'];
	$phone=$row['phone'];
	$photo=$row['photo'];

	$update=true;
}
if(isset($_POST['update'])){
	$id=$_POST['id'];
	$nom=$_POST['nom'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$oldimage=$_POST['oldimage'];
	if(isset($_FILES['image']['name'])&&($_FILES['image']['name']!="")){
		$newimage="uploads/".$_FILES['image']['name'];
		unlink($oldimage);
		move_uploaded_file($_FILES['image']['tmp_name'], $newimage);
	}
	else{
		$newimage=$oldimage;
	}
	$query ="UPDATE phpcrud SET nom=?,email=?,phone=?,photo=? WHERE id=?";
	$stmt=$conn->prepare($query);
	$stmt->bind_param("ssssi",$nom,$email,$phone,$newimage,$id);
	$stmt->execute();

	$_SESSION['response'] ="Mise à jour effectuée!";
	$_SESSION['res_type']="primary";
	header('location:index.php');
}

if(isset($_GET['details'])){
	$id=$_GET['details'];
	$query="SELECT * FROM phpcrud WHERE id =?";
	$stmt=$conn->prepare($query);
	$stmt->bind_param("i",$id);
	$stmt->execute();
	$result=$stmt->get_result();
	$row=$result->fetch_assoc();

	$vid=$row['id'];
	$vnom=$row['nom'];
	$vemail=$row['email'];
	$vphone=$row['phone'];
	$vphoto=$row['photo'];
}
?>