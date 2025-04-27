
  <title>Login</title>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login page</title>
              
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,700;1,200&family=Unbounded:wght@400;700&display=swap" rel="stylesheet">
        <link href="bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap-icons.css" rel="stylesheet">
        <link href="tooplate-kool-form-pack.css" rel="stylesheet">

    <div class="modal fade" id="subscribeModal" tabindex="-1" aria-labelledby="subscribeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">            
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="get" class="custom-form mt-lg-4 mt-2" role="form">
                        <h2 class="modal-title" id="subscribeModalLabel">Stay up to date</h2>
                        <input type="email" name="uemail" id="uemail" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="your@email.com" required="">
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
                    <form action="login_ir.php" method="post" target="kisablak">
                        <h2 class="hero-title text-center mb-4 pb-2">Login Form</h2>
                        <div class="form-floating mb-4 p-0">
                            <input type="email" name="uemail" id="uemail" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required="">
                            <label for="email">Email address</label>
                        </div>
                        <div class="form-floating p-0">
                            <input type="password" name="upass" id="upass" class="form-control" placeholder="Password" required="">
                            <label for="upass">Password</label>
                        </div>
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                        </div>
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-5 col-md-5 col-5 ms-auto">
                                <button type="submit" class="col-md-10 custom-btn">Login</button>
                            </div>
                            <div class="col-lg-5 col-12">
                                <p class="mb-0">If you want to join us! 
                                <a href="reg_form.php" class="ms-2">Register</a>
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

</html>
