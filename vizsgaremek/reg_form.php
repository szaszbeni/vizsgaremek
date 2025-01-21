<!DOCTYPE html>
<html lang="hu">
<head>
    <title>Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Kool Form Pack | Register or Create an account</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,700;1,200&family=Unbounded:wght@400;700&display=swap" rel="stylesheet">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-icons.css" rel="stylesheet">
    <link href="tooplate-kool-form-pack.css" rel="stylesheet">
</head>
<body>
    <div class="modal fade" id="subscribeModal" tabindex="-1" aria-labelledby="subscribeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="get" class="custom-form mt-lg-4 mt-2" role="form">
                        <h2 class="modal-title" id="subscribeModalLabel">Stay up to date</h2>
                        <input type="email" name="uemail" id="uemail" class="form-control" placeholder="your@email.com" required>
                        <button type="submit" class="form-control">Notify</button>
                    </form>
                </div>
                <div class="modal-footer justify-content-center">
                    <p>By signing up, you agree to our Privacy Notice</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero-section d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 mx-auto">
                    <form action="reg_ir.php" method="post" class="custom-form" role="form">
                        <h2 class="hero-title text-center mb-4 pb-2">Create an account</h2>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-floating">
                                    <input type="text" name="uname" id="uname" class="form-control" placeholder="Full Name" required>
                                    <label for="full-name">Full Name</label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-floating mb-4">
                                    <input type="email" name="uemail" id="uemail" class="form-control" placeholder="Email address" required>
                                    <label for="uemail">Email address</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-12">
                                <div class="form-floating">
                                    <input type="password" name="pass" id="pass" class="form-control" placeholder="Password" required>
                                    <label for="pass">Password</label>
                                </div>
                                <div class="form-check mb-4">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                                    <label class="form-check-label" for="flexCheckDefault">I agree to the Terms of Service and Privacy Policy.</label>
                                </div>
                            </div>
                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-5 col-md-5 col-5 ms-auto">
                                    <button type="submit" class="form-control">Registration</button>
                                </div>
                                <div class="col-lg-6 col-md-6 col-7">
                                    <p class="mb-0">Already have an account? 
                                        <a href="login_form.php" class="ms-2">Login</a></p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="video-wrap">
            <video autoplay loop muted class="custom-video">
                <source src="videos/video.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </section>

    <!-- Scripts -->
    <script>
        function Udvozles(event) {
            let fnev = document.getElementById("full-name").value;
            let email = document.getElementById("uemail").value;
            let jelszo = document.getElementById("pass").value;
            if (fnev && email && jelszo) {
                alert("Welcome " + fnev + "!");
            } else {
                alert("Valamelyik mező nincs kitöltve!");
                event.preventDefault();
            }
        }
        document.querySelector("form").addEventListener("submit", Udvozles);
    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/countdown.js"></script>
    <script src="js/init.js"></script>
</body>
</html>
