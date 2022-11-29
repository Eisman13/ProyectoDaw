<?php require_once('templates/header.php'); ?>
<?php 

if(!isset($_SESSION['username'])){
    #header("Location: login.php");
  echo "Session: " + $_SESSION['username'];
} else {
//else cuando tiene la sesion iniciada

  $succes = false;
  $alreadyExist = false;

  $loggeduserid = $_SESSION['id'];
  
  
  if (isset($_POST['tittle'], $_POST['contents'], $_POST['email'], $_POST['city']) && !empty($_POST['tittle']) && !empty($_POST['contents']) && !empty($_POST['email']) && !empty($_POST['city'])) {
    require_once('src/Ad/AdRepository.php');
    $adRepository = new AdRepository();

    if (!$alreadyExist){
    $adRepository->createAnuncios($_POST['tittle'], $_POST['contents'], $_POST['email'], $_POST['city'], $loggeduserid);

    echo "El anuncio se ha añadido correctamente" . "<br>";
    }
  }
}
 ?>