<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kezdolap</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,700;1,200&family=Unbounded:wght@400;700&display=swap" rel="stylesheet">
        <link href="bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap-icons.css" rel="stylesheet">
        <link href="tooplate-kool-form-pack.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    </head>
    
    <body>

        <main>
            <div class="modal fade" id="subscribeModal" tabindex="-1" aria-labelledby="subscribeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-body">
                            <form action="#" method="get" class="custom-form mt-lg-4 mt-2" role="form">
                                <h2 class="modal-title" id="subscribeModalLabel">Stay up to date</h2>

                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="your@email.com" required="">
                            </form>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <p>By signing up, you agree to our Privacy Notice</p>
                        </div>
                    </div>
                </div>
            </div>

            <section class="hero-section d-flex  align-items-center" id="section_1" >
                <div class="container" >
                    <div class="row">

                        <div class="col-lg-6 col-12 mx-auto" >
                            <h1 class="text-white" style="text-align: center;" >
                                Stay tuned!
                            </h1>
                            <?php
                                    $currentDateTime = new DateTime();
                                    $year = $currentDateTime->format("Y");
                                    $month = $currentDateTime->format("m");
                                    $day = $currentDateTime->format("d");
                                    $hours = $currentDateTime->format("h");
                                    $minutes = $currentDateTime->format("i");
                                    $seconds = $currentDateTime->format("s");
                                ?>
                            <ul class="countdown d-flex flex-wrap justify-content-center">
                                <li class="countdown-item">
                                    <h2 class="countdown-title"><?php echo $year; ?></h2>
                                    <span class="countdown-text">Year</span>
                                </li>
                                <li class="countdown-item">
                                    <h2 class="countdown-title"><?php echo $month; ?></h2>
                                    <span class="countdown-text">Month</span>
                                </li>
                                <li class="countdown-item">
                                    <h2 class="countdown-title"><?php echo $day; ?></h2>
                                    <span class="countdown-text">Day</span>
                                </li>
                            </ul>

                            <ul class="countdown d-flex flex-wrap justify-content-center">
                                <li class="countdown-item d-flex flex-column justify-content-center align-items-center">
                                    <h2 class="countdown-title"><?php echo $hours; ?></h2>
                                    <span class="countdown-text">Hours</span>
                                </li>
                                <li class="countdown-item d-flex flex-column justify-content-center align-items-center">
                                    <h2 class="countdown-title"><?php echo $minutes; ?></h2>
                                    <span class="countdown-text">Minutes</span>
                                </li>
                                <li class="countdown-item d-flex flex-column justify-content-center align-items-center">
                                    <h2 class="countdown-title"><?php echo $seconds; ?></h2>
                                    <span class="countdown-text">Seconds</span>
                                </li>
                            </ul>


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
        <script src="countdown.js"></script>
        <script src="init.js"></script>
    </body>
</html>
