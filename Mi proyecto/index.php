<!doctype HTML>
<html>

<head>

  <?php include 'imports.php' ?>
  <title> Recent pictures </title>
</head>

<body>
  <?php include 'header.php' ?>

  <div class="container">
    <div class="row">
      <div class="col-md text-center">
        <h3>Recent pictures</h3>
      </div>
    </div>

    <hr>

    <div class="row">

      <div class="col-md text-center">
        <div class="card">
          <a href="photo_detail.php">
            <img src="https://improxy.starmakerstudios.com/tools/im/560/production/uploading/recordings/5348024552004433/cover_image.png?ts=1521787776" class="card-img-top">
          </a>

          <div class="card-body">
            <h5 class="card-title">Can I someday find my time?</h5>
            <p class="card-text">Boy near the sea</p>
            <hr>
            <p class="card-text">
              Tags:
              <span class="badge badge-secondary">sea</span>
              <span class="badge badge-secondary">black and white</span>
            </p>
          </div>
        </div>
      </div>

      <div class="col-md text-center">
        <div class="card">
          <a href="photo_detail.php">
            <img src="https://scontent-lhr8-1.cdninstagram.com/v/t51.2885-15/e35/c0.80.639.639a/87773915_490650661825876_528912236677356994_n.jpg?_nc_ht=scontent-lhr8-1.cdninstagram.com&_nc_cat=104&_nc_ohc=qf7Mr8h_XawAX-XdoRB&oh=241e40afafe4766ec7431ec87323542f&oe=5E98FAC8" class="card-img-top">
          </a>

          <div class="card-body">
            <h5 class="card-title">Photo time!</h5>
            <p class="card-text">A boy taking a photo.</p>
            <hr>
            <p class="card-text">
              Tags:
              <span class="badge badge-secondary">Camera</span>
            </p>
          </div>
        </div>
      </div>

      <div class="col-md text-center">
        <div class="card">
          <a href="photo_detail.php">
            <img src="https://tododekpop.com/wp-content/uploads/2020/01/vante-taehyung-bts.jpg" class="card-img-top">
          </a>

          <div class="card-body">
            <h5 class="card-title">Train</h5>
            <p class="card-text">A beautiful landscape.</p>
            <hr>
            <p class="card-text">
              Tags:
              <span class="badge badge-secondary">nature</span>
              <span class="badge badge-secondary">landscape</span>
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <?php include 'footer.php' ?>
</body>

</html>


<script>
$("#navbarDesplegableId").mouseenter(function(){
  $(this).click();
});


</script>

