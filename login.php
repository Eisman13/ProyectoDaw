<?php require_once('templates/header.php'); 

//INCLUDE ENCABEZADO DE PAGINA//

?>
<?php 
  
  //FORMULARIO DE INICIO DE SESION//

  $succes = false;
  $alreadyExist = false;
  
  if (isset($_POST['email'], $_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    require_once('src/User/UserRepository.php');
    $userRepository = new UserRepository();
    
    echo "Ha ocurrido un error, por favor, compruebe denuevo sus datos o registrese.";
    
    $succes = is_null($userRepository->getByEmailAndPassword($_POST['email'], $_POST['password'])) ? false : true;
    if ($succes){
    
    $_SESSION['username'] = $_POST['email'];
    $_SESSION['id'] = $userRepository->getByEmailAndPassword($_POST['email'], $_POST['password'])['id']; 

    //REDIRECCION A PORTADA SI SE INICIA SESION//

    header("Location: index.php");
    
    }
  }
 ?>

    
<div class="container">
  <br>
  <h1>Inicio de sesión</h1><br>
  <a href="register.php">¿No tienes cuenta? Regístrate</a>
    <?php if($succes): ?>
      <p>Sesión iniciada</p>
    <?php endif; ?>
    <?php if($alreadyExist): ?>
      <p>Ya existe un usuario con este email</p>
    <?php endif; ?>
  <div class="register-form">
    <form action="" method="POST">
      <input type="email" name="email" placeholder="Email">
      <input type="password" name="password" placeholder="Contraseña">
      <input type="submit" value="Entrar">
    </form>
  </div>
  <div class="register-form">
    

  </div>
</div>

<?php require_once('templates/footer.php'); 

//INCLUDE PIE DE PAGINA//

?>

