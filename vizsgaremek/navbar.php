<header id='fejlec' class='site-header'>
        <div class='container'>
            <div class='row justify-content-between'>
                <div class='col-lg-12 col-12 d-flex align-items-center'>
                    <a class='site-header-text d-flex justify-content-center align-items-center me-auto' href='kezdolap.php'>
                        <i class='bi-box'></i>
                    </a>
                    <ul class='social-icon d-flex justify-content-center align-items-center mx-auto'>
                        <span class='text-white me-4 d-none d-lg-block'>Stay connected</span>
                        <li class='social-icon-item'>
                            <a href='#' class='social-icon-link bi-instagram'></a>
                        </li>
                        <li class='social-icon-item'>
                            <a href='#' class='social-icon-link bi-twitter'></a>
                        </li>
                        <li class='social-icon-item'>
                            <a href='#' class='social-icon-link bi-whatsapp'></a>
                        </li>
                    </ul>
                    <ul id='links'>
                        <li><img src='./profilkepek/$profilkep' style='height:30px; border-radius:50%;'>
                        <a href='./?p=adatlapom'> $_SESSION[uname] </a>
                        <input type='button' value='Kilépés' onclick=' kisablak.location.href="logout.php" '></li>
                    </ul>
                    <div>
                        <a href='#' class='custom-btn custom-border-btn btn' data-bs-toggle='modal' data-bs-target='#subscribeModal'>Notify me
                            <i class='bi-arrow-right ms-2'></i>
                        </a>
                    </div>
                    <a class='bi-list offcanvas-icon' data-bs-toggle='offcanvas' href='#offcanvasMenu' role='button' aria-controls='offcanvasMenu'>☰</a>

                   
                </div>
            </div>
        </div>
        <div class="offcanvas offcanvas-end" data-bs-scroll="true" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">                
                <div class="offcanvas-header">                    
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body d-flex flex-column justify-content-center align-items-center">
                    <nav>
                        <ul>
                            <li>
                                <a href="./?p=login">Login</a>
                            </li>

                            <li>
                                <a href="./?p=regisztracio">Create an account</a>
                            </li>

                            <li>
                                <a href="./?p=jelszo">Password Reset</a>
                            </li>

                            <li>
                                <a href="./?p=404">404 Page</a>
                            </li>

                            <li>
                                <a href="./?p=contact">Contact Me</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
    </header>