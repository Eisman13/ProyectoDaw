<?php require_once('templates/header.php'); ?>

<?php if(!isset($_SESSION['username'])) : ?>

<?php else : ?>

<?php endif ?>
   
    <!--ENCABEZADO-->

    
<div class="container">
  <br>
  <h1>Tablón de Anuncios de Andalucía</h1>
    <h3>¡Bienvenid@!</h3>
    <p>Acaba usted de entrar en una web de anuncios online gratuita de Andalucía. Donde los visitantes pueden ver y publicar toda clase de anuncios, pero que para contestar o conocer toda la información relevante, deberán REGISTRARSE o LOGUEARSE, para así acceder a datos de índole privada.</p> <h3>Recuerde que registrarse con nosotros es totatlmente gratuito.</h3>
</div>
   

  <h1>Busca aquí</h1><br>
  <div class="register-form">
    <form method="POST">
            <div class="wrap">
                <select class="search-box" name="city">
                  <option value="0" selected="">Toda Andalucia</option>
                  <option value="Almería">Almería</option>
                  <option value="Cádiz">Cádiz</option>
                  <option value="Córdoba">Córdoba</option>
                  <option value="Granada">Granada</option>
                  <option value="Huelva">Huelva</option>
                  <option value="Jaén">Jaén</option>
                  <option value="Málaga">Málaga</option>
                  <option value="Sevilla">Sevilla</option>
                </select>
            </div><br>
              <button type="submit" name="buscar" value="anunciodetail.php">Buscar</button>     
    </form>   
  </div>
    <div class="row">
      <div class="col s12"></div>
        

<h1>Anuncios</h1>

<?php require_once('src/Ad/AdRepository.php');
    $adRepository = new AdRepository();


if (isset($_POST['city']) && $_POST['city'] !=0) {
  $all = $adRepository->getByCity($_POST['city']);

} else {
  $all = $adRepository->getAll();
}

?>
        <div class="carousel center-align">
          <?php foreach ($all as $tittle): ?>

            <div class="carousel-card">
              
                <h2><?php echo $tittle[1];?></h2>

                <p>
                  <?php

                  if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
                    echo $tittle[2] . "</p><p>" . $tittle[3] . "</p>" . $tittle[4];

                  } else {
                    for($i=0; $i<strlen($tittle[2]); $i++){
                  if ($i>=50)
                    break;
                  echo $tittle[2][$i];}
                  echo '...';
                  }
                  
                  ?>
                </p>
            </div>
          <?php endforeach; ?>

        </div>
    </div>


    <!--PIE DE PAGINA-->

<?php require_once('templates/footer.php'); ?>