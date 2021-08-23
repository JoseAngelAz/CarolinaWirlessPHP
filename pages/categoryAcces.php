<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Carolina Wireless</title>
  <link rel="stylesheet" href="css/cssGloval.css">
  <?php
  include '../component/headerInclude.html';
  ?>
    <link href="../css/cssGloval.css" rel="stylesheet" crossorigin="anonymous">
  </head>
  <body>
  <?php
  include '../component/navbar.html';
  ?>
  <div  onclick="hideMenu()" class="container-store">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-lg-8">
        <div class="card">
          <div class="card-body">
            This is some text within a card body.
          </div>
        </div>
      </div>
      <div class="col-md-12 col-sm-12 col-lg-4">
        <div class="card" style="margin-top:5px !important;">
          <div class="card-body">
            This is some text within a card body.
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
