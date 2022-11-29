<?php require_once('templates/header.php'); ?>
<?php 

if(!isset($_SESSION['username'])){
    #header("Location: login.php");
  echo "Session: " + $_SESSION['username'];
} else {

//ELSE CUANDO TIENE INICIADA LA SESION//

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

    
<div class="container">
  <br>
  <h1>Añadir Anuncio</h1><br>
    <?php if($succes): ?><p>El anuncio ha sido añadido con éxito</p><?php endif; ?>
  <div class="register-form">
    <form action="" method="POST">
      <input type="text" name="tittle" placeholder="Titulo">
      <input type="text" name="contents" placeholder="Texto">
      <input type="email" name="email" placeholder="Email">
      <input type="text" name="city" placeholder="Provincia">
      <button type="submit" name="accion" value="crearanuncio.php">Añadir</button>
    </form>
  </div>
  <div class="register-form">
    
    
  </div>
</div>

<?php require_once('templates/footer.php'); ?>

