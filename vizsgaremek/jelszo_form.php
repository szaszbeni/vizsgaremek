<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jelszó módosítása</title>

    <!--<link rel="stylesheet" href="vizsga.css">-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,700;1,200&family=Unbounded:wght@400;700&display=swap" rel="stylesheet">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-icons.css" rel="stylesheet">
    <link href="tooplate-kool-form-pack.css" rel="stylesheet">
</head>
<body>

<?php
session_start();
include('kapcsolat.php');

if (!isset($_SESSION['uid'])) {
    die("<script>alert('Kérjük, jelentkezzen be!');</script>");
}

$userQuery = "SELECT * FROM user WHERE uid = ?";
$stmt = mysqli_prepare($adb, $userQuery);
mysqli_stmt_bind_param($stmt, "i", $_SESSION['uid']);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($result && $user = mysqli_fetch_array($result)) {
    // Felhasználó adatai betöltve
} else {
    die("<script>alert('Nem található a felhasználó!');</script>");
}

mysqli_stmt_close($stmt);
?>

<div class="modal fade" id="subscribeModal" tabindex="-1" aria-labelledby="subscribeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="get" class="custom-form mt-lg-4 mt-2" role="form">
                    <h2 class="modal-title" id="subscribeModalLabel">Stay up to date</h2>
                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="your@email.com" required="">
                    <button type="submit" class="form-control">Notify</button>
                </form>
            </div>
            <div class="modal-footer justify-content-center">
                <p>By signing up, you agree to our Privacy Notice</p>
            </div>
        </div>
    </div>
</div>
<section class="hero-section d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-12 mx-auto">
                <form action="jelszo_ir.php" class="custom-form" role="form" method="post">
                    <input type="hidden" name="uid" value="<?= htmlspecialchars($user['uid']); ?>"><br><h2 class="hero-title text-center mb-4 pb-2">Reset Password</h2>
                    <div class="form-floating mt-4">
                        <input type="password" name="pass" id="pass" pattern="[0-9a-zA-Z]{4,10}" class="form-control" placeholder="Password" required="">
                        <label for="pass">New Password</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="pass" id="pass" pattern="[0-9a-zA-Z]{4,10}" class="form-control" placeholder="Password" required="">
                        <label for="pass">Confirm Password</label>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-12 mx-auto">
                            <button type="submit" class="form-control">Submit</button>
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

    <script src="jquery.min.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
    <script src="countdown.js"></script>
    <script src="init.js"></script>
</body>
</html>
