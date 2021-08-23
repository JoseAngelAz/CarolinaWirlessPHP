<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Carolina Wireless</title>
    <link href="index.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
      <!-- CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="css/navbar-personal.css" rel="stylesheet" crossorigin="anonymous">
      <!-- JS -->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="index.js" ></script>
 </head>
 <body>
 <?php
  include ('navbar.html');
  //include("../serviceStoreGalery/principal.php");
  ?>

  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo $banner ?>" class="d-block w-100" alt="...">
      <img class="img-company" src="<?php echo $perfileImg ?>" alt="...">
      <span class="sub-title" >Carolina Wireless</span>
    </div>
    <div class="back" style="position:absolute; width:100%; background:blue; opacity:0.2; top:0; bottom:0;"></div>
  </div>
</div>
<div>
  <div class="container-store">
    <!-- cards de telefonos y laptops-->
    <div class="">
      <div class="row">
        <div class="col-12">
          <div class="titles-categories">
            <a href="./pages/categoryMovil.php">Telefonos / Tabletas</a>
          </div>
        </div>
      </div>
      <div class="row">
        <?php foreach ($arrCat1 as $prod) { ?>
          <div class="col-md-4 col-sm-6 col-lg-3 container-img">
            <a href="./pages/detalleprod.php"><img src="<?php echo $prod ?>" class="card-img-top" alt="..."></a>
            <div class="banner-image-categories">
              <p>(NOMBRE DE PRODUCTO)</p>
              <p>$ 0.00</p>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
      <!-- cards de accesorios de telefono-->
    <div class="">
      <div class="row">
        <div class="col-12">
          <div class="titles-categories">
              <a href="./pages/categoryAcces.php">Accesorios de Telefonos</a>
          </div>
        </div>
      </div>
      <div class="row">
        <?php foreach ($arrCat2 as $prod) { ?>
          <div class="col-md-4 col-sm-6 col-lg-3 container-img">
            <a href="./pages/detalleprod.php"><img src="<?php echo $prod ?>" class="card-img-top" alt="..."></a>
            <div class="banner-image-categories">
              <p>(NOMBRE DE PRODUCTO)</p>
              <p>$ 0.00</p>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
<?php
 include 'component/footer.php';
 ?>
 </body>
</html>
