<?php require_once('templates/header.php'); ?>
<?php 
  //registro de usuario
  $succes = false;
  $alreadyExist = false;
  
  if (isset($_POST['name'], $_POST['email'], $_POST['password'], $_POST['city']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['city']) && !empty($_POST['city'])) {
    require_once('src/User/UserRepository.php');
    $userRepository = new UserRepository();
    $alreadyExist = is_null($userRepository->getByEmail($_POST['email'])) ? false : true;

    
    if (!$alreadyExist){
    $userRepository->createUser($_POST['email'], $_POST['password'], $_POST['name'], $_POST['city']);

    echo "Registro realizado con exito" . "<br>";

    $succes = is_null($userRepository->getByEmail($_POST['email'])) ? false : true;

    echo "No se ha podido realizar el registro, revise sus datos nuevamente" . "<br>";

    header("Location: login.php");

    
    }
    
  }
 ?>




    <!--SLIDER IMG-->

    
<div class="container">
  <br>
  <h1>Registrarse</h1><br>
    <?php if($succes): ?><p>Se ha creado la cuenta correctamente</p><?php endif; ?>
    <?php if($alreadyExist): ?><p>Ya existe un usuario con este email</p><?php endif; ?>
  <div class="register-form">
    <form action="" method="POST">
      <input type="text" name="name" placeholder="Nombre">
      <input type="email" name="email" placeholder="Email">
      <input type="password" name="password" placeholder="Contraseña">
      <input type="text" name="city" placeholder="Ciudad">
      <input type="submit" value="Registrar">
    </form>
  </div>
  <div class="register-form">
    
    
  </div>
</div>

<?php require_once('templates/footer.php'); ?>

