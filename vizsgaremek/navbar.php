<header id='fejlec' class='site-header'>
        <div class='container'>
            <div class='row justify-content-between'>
                <div class='col-lg-12 col-12 d-flex align-items-center'>
                    <a class='site-header-text d-flex justify-content-center align-items-center me-auto' href='http://localhost/szaszbeni/vizsgaremek/#.php'>
                        <i>Kezdőlap</i>
                    </a>
                    <ul class='social-icon d-flex justify-content-center align-items-center mx-auto'>
                        <span class='text-white me-4 d-none d-lg-block'>Stay connected</span>
                        <li class='social-icon-item'>
                            <a href='https://www.instagram.com/' class='social-icon-link'>I</a>
                        </li>
                        <li class='social-icon-item'>
                            <a href='https://x.com/?lang=hu&mx=2' class='social-icon-link'>X</a>
                        </li>
                        <li class='social-icon-item'>
                            <a href='https://www.facebook.com/?locale=hu_HU' class='social-icon-link'>F</a>
                        </li>
                    </ul>
                    <ul id='links'>
    <?php if (isset($_SESSION['uname'])): ?>
        <li>
            <img src='./profilkepek/<?php echo htmlspecialchars($_SESSION['profilkep']); ?>' style='height:30px; border-radius:50%;'>
            <a href='http://localhost/szaszbeni/vizsgaremek/adatlap_form.php'><?php echo htmlspecialchars($_SESSION['uname']); ?></a>
            <input type='button' value='Kilépés' onclick='kisablak.location.href="logout.php"'>
        </li>
    <?php else: ?>
        <li>
            <a href='http://localhost/szaszbeni/vizsgaremek/adatlap_form.php'></a>
        </li>
    <?php endif; ?>
</ul>

                    <a class=' offcanvas-icon' data-bs-toggle='offcanvas' href='#offcanvasMenu' role='button' aria-controls='offcanvasMenu'>☰</a>

                   
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
                            <li>
                                <a href="./?p=adatlapom">Adatlapodom</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
    </header>