<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>contacctme</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,700;1,200&family=Unbounded:wght@400;700&display=swap" rel="stylesheet">
        <link href="bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap-icons.css" rel="stylesheet">
        <link href="tooplate-kool-form-pack.css" rel="stylesheet">
    </head>
    <body>
        <main>
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
                        <div class="col-lg-6 col-12 mx-auto">
                            <form class="custom-form contact-form" role="form" method="post">
                                <h2 class="hero-title text-center mb-4 pb-2">Contact Form</h2>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-floating">
                                            <input type="text" name="full-name" id="full-name" class="form-control" placeholder="Full Name" required="">
                                            <label for="floatingInput">Full Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-floating mb-4 p-0">
                                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required="">
                                            <label for="email">Email address</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" id="message" name="message" placeholder="Message"></textarea>
                                            <label for="floatingTextarea">Message</label>
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
                        <source src="videos/video.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </section>
        </main>


        <div class="form-container">
    <form method="post" action="actions/uzenofalFeldolgozas.php" target="kisablak" enctype="multipart/form-data">
        <div id='error-message' class='alert alert-danger' style='display: none;'></div>
        <div id="success-message" class="mt-3 p-1" style="display: none; width:88%; background-color:#28a745; color: #fff; border-radius: 5px; margin: auto;"></div>
        <label for="title">Cím:</label> <br>
        <textarea id="title" class="form-textarea" name="cim" required></textarea> <br><br>
        <label for="content">Szöveg:</label> <br>
        <textarea id="content" class="form-textarea" name="szoveg" required></textarea> <br><br>
        <input type="file" class="form-file" name="kep"> <br><br>
        <button type="submit" class="form-button" name="kozzetetel">Közzététel</button>
    </form>
</div>

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/countdown.js"></script>
        <script src="js/init.js"></script>
    </body>
</html>
