<style>
        .social-icons {
            display: flex;
            gap: 15px;
            height: 40px;
            display: inline-flex;
            justify-content: center;
            text-decoration: none;
            transition: transform 0.3s ease-in-out;
        }
        .social-icons a:hover {
            transform: scale(1.1);
        }
        .icon {
            width: 30px;
            height: 30px;
            fill: #333;
            transition: fill 0.3s ease-in-out;
        }
        .social-icons a:hover .icon {
            fill: #007bff;
        }
        .ikonok{
            margin-left: 15px;
            margin-right: 15px;

        }
    </style>
<header id='fejlec' class='site-header'>
<div class="container">
    <div class="row">
        <div class="col-12 d-flex align-items-center justify-content-between">
            
            <a class="site-header-text" href="http://localhost/szaszbeni/vizsgaremek/#.php">
                <i>Kezdőlap</i>
            </a>

            <div class="social-icons d-flex justify-content-center">
                <a href="https://www.instagram.com/" class="ikonok" target="_blank">
                    <svg class="icon" viewBox="0 0 24 24">
                        <path d="M7.5,2h9A5.5,5.5,0,0,1,22,7.5v9A5.5,5.5,0,0,1,16.5,22h-9A5.5,5.5,0,0,1,2,16.5v-9A5.5,5.5,0,0,1,7.5,2ZM12,7.5A4.5,4.5,0,1,0,16.5,12,4.5,4.5,0,0,0,12,7.5ZM18,5.5A1.5,1.5,0,1,0,19.5,7,1.5,1.5,0,0,0,18,5.5Z M12,9A3,3,0,1,1,9,12,3,3,0,0,1,12,9Z"/>
                    </svg>
                </a>
                
                <a href="https://twitter.com/" class="ikonok" target="_blank">
                    <svg class="icon" viewBox="0 0 24 24">
                        <path d="M19.7,2H22L14,10l8,12H16.3L10.5,14l-6,8H2L10,12,2,2H7.7l5.2,7,5.7-7Z"/>
                    </svg>
                </a>
                
                <a href="https://www.facebook.com/" class="ikonok" target="_blank">
                    <svg class="icon" viewBox="0 0 24 24">
                        <path d="M22,12A10,10,0,1,0,10,22V14H7V12h3V9.5A3.5,3.5,0,0,1,13.5,6H17V8H14.5A1.5,1.5,0,0,0,13,9.5V12h4l-.5,2H13v8A10,10,0,0,0,22,12Z"/>
                    </svg>
                </a>
            </div>

            <div class="d-flex align-items-center">
                <ul id="links" class="d-flex align-items-center">
                    <?php if (isset($_SESSION['uname'])): ?>
                        <li>
                            <img src="./profilkepek/<?php echo htmlspecialchars($_SESSION['profilkep']); ?>" style="height:30px; border-radius:50%;">
                            <a href="http://localhost/szaszbeni/vizsgaremek/?p=adatlapom"><?php echo htmlspecialchars($_SESSION['uname']); ?></a>
                            <input type="button" value="Kilépés" onclick="kisablak.location.href='logout.php'">
                        </li>
                    <?php else: ?>
                        <li>
                            <a href="http://localhost/szaszbeni/vizsgaremek/adatlap_form.php">Bejelentkezés</a>
                        </li>
                    <?php endif; ?>
                </ul>

                <a class="offcanvas-icon ms-3" data-bs-toggle="offcanvas" href="#offcanvasMenu" role="button" aria-controls="offcanvasMenu">
                    ☰
                </a>
            </div>

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
                            <li>
                                <a href="./?p=baratok">Add Friends</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
    </header>


