<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Carolina Wireless</title>
  <?php
  include '../component/headerInclude.html';
  ?>
  <style media="screen">
    .form-floating,.btn{
      padding: 5px;
    }
  </style>
  </head>
  <body>
    <?php
    include '../component/navbarDetail.html';
    ?>
  <div  onclick="hideMenu()" class="container-store">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-lg-8">
        <div class="card">
          <div class="card-body">
            esta pantalla es para el detalle del producto
          </div>
        </div>
      </div>
      <div class="col-md-12 col-sm-12 col-lg-4">
        <div class="card" style="margin-top:5px !important;">
          <div class="card-body">
            <div class="card" style="margin-top:5px !important;">
              <div class="card-body">
                <h5 class="card-title">Solicitar este Producto</h5>
                <div class="row">
                  <div class="form-floating ">
                    <input type="email" class="form-control" >
                    <label for="floatingInput">Nombre de Contacto</label>
                  </div>
                </div>
                <div class="row">
                  <div class="form-floating ">
                    <input type="email" class="form-control" >
                    <label for="floatingInput">Correo de Contacto</label>
                  </div>
                </div>
                <div class="row">
                  <div class="form-floating ">
                    <input type="email" class="form-control" >
                    <label for="floatingInput">Telefono de Contacto</label>
                  </div>
                </div>
                <div class="row">
                  <div class="form-floating">
                    <textarea class="form-control" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Mensaje</label>
                  </div>
                </div>
                <button type="button" class="btn btn-outline-primary">Cancelar</button>
                <button type="button" class="btn btn-outline-success">Enviar Mensaje</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
   include '../component/footer.php';
   ?>
  </body>
</html>
