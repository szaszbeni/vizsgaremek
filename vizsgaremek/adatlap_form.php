    <title>Adatlap</title>
    
    <!--<link rel="stylesheet" href="vizsga.css">-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,700;1,200&family=Unbounded:wght@400;700&display=swap" rel="stylesheet">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-icons.css" rel="stylesheet">
    <link href="tooplate-kool-form-pack.css" rel="stylesheet">


<?php
  $user = mysqli_fetch_array(mysqli_query( $adb, "SELECT * FROM user WHERE uid='$_SESSION[uid]'"));
?>

<section class="hero-section d-flex justify-content-center align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-12 mx-auto">
        <form action='adatlap_ir.php' method='post' target='kisablak' class="custom-form" role="form" enctype='multipart/form-data'>
        <input type="hidden" name="uid" value="<?= htmlspecialchars($user['uid']); ?>"><br><h2 class="hero-title text-center mb-4 pb-2">Adatlapom</h2>
          <div class="form-floating mt-4">
            <h3 for='uname'>Nickname:</h3>
            <input type='text' id='uname' name='uname' value='<?=$user['uname'];?>' maxlength=100><br>
          </div>
          <h3 for='uemail'>Email:</h3>
          <input type='text' id='uemail' name='uemail' value='<?=$user['uemail'];?>' maxlength=250><br>
          <input type="button" value="Jelszavam modositasa" onclick="location.href='jelszo_form.php'"><br><br>
          <span>Uj profilkép:</span><input type="file" name='uproffkep'><br>
          <div class="row">
            <div class="col-lg-5 col-12 mx-auto">
              <button type="submit" class="form-control">Modositas</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="video-wrap">
    <video autoplay="" loop="" muted="" class="custom-video" poster="">
      <source src="videos/video.mp4" type="video/mp4">Your browser does not support the video tag.
    </video>
  </div>
</section>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/countdown.js"></script>
  <script src="js/init.js"></script>