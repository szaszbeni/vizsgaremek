<?php
$adb = mysqli_connect("localhost", "root", "", "szb_registration");
if (!$adb) {
    die("Adatbázis kapcsolat sikertelen: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["umessage"])) {
    $uname = mysqli_real_escape_string($adb, $_POST['uname']);
    $uemail = mysqli_real_escape_string($adb, $_POST['uemail']);
    $umessage = mysqli_real_escape_string($adb, $_POST['umessage']);
    
    // Kép feltöltés kezelése
    $uzenoKep = "";
    if (isset($_FILES["kep"]) && $_FILES["kep"]["error"] == 0) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["kep"]["name"]);
        move_uploaded_file($_FILES["kep"]["tmp_name"], $target_file);
        $uzenoKep = $target_file;
    }

    $sql = "INSERT INTO uzenofal (uzenoID, uzenoName, uzenoCim, uzenoSzoveg, uzenoDatum, uzenoKep) 
            VALUES (NULL, '$uemail', '$uname', '$umessage', NOW(), '$uzenoKep')";

    if (mysqli_query($adb, $sql)) {
        echo "<script>alert('Üzenet sikeresen elküldve!');</script>";
    } else {
        echo "<script>alert('Hiba történt: " . mysqli_error($adb) . "');</script>";
    }
    mysqli_close($adb);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Me</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-icons.css" rel="stylesheet">
    <link href="tooplate-kool-form-pack.css" rel="stylesheet">
</head>
<body>
    <main>
        <section class="hero-section d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12 mx-auto">
                        <form class="custom-form contact-form" action="" method="post" enctype="multipart/form-data">
                            <h2 class="hero-title text-center mb-4 pb-2">Contact Me</h2>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-floating">
                                        <input type="text" name="full-name" id="full-name" class="form-control" placeholder="Full Name" required>
                                        <label for="full-name">Full Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-floating">
                                        <input type="email" name="uemail" id="uemail" class="form-control" placeholder="Email address" required>
                                        <label for="uemail">Email address</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="umessage" name="umessage" placeholder="Message" required></textarea>
                                        <label for="umessage">Message</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-12">
                                    <div class="">
                                        <input type="file" id="uzenoKep" class="form-control" name="kep">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-10 mx-auto">
                                    <button type="submit" class="form-control">Send Message</button>
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
    </main>
    <script src="jquery.min.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>
