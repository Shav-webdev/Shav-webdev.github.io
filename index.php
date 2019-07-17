<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="36x36"  href="android-icon-36x36.png">
    <link rel="icon" type="image/png" sizes="48x48"  href="android-icon-48x48.png">
    <link rel="icon" type="image/png" sizes="72x72"  href="android-icon-72x72.png">
    <link rel="icon" type="image/png" sizes="96x96"  href="android-icon-96x96.png">
    <link rel="icon" type="image/png" sizes="144x144"  href="android-icon-144x144.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="heading-nav">
    <div class="container">
        <nav class="navbar navbar-expand-lg fixed-top animated fadeInDown delay-1s">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fas fa-bars"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav" id="menu_nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="my_skills.php" target="_blank">My Skills</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Contacts
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="https://web.facebook.com/shavarsh7777" target="_blank">Facebook</a>
                            <a class="dropdown-item" href="https://www.linkedin.com/in/shavarsh-abrahamyan-42065816a/" target="_blank">LinkedIn</a>
                            <a class="dropdown-item" href="https://github.com/Shav-webdev" target="_blank">Github</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownLanguage" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-globe"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownLanguage">
                            <a class="dropdown-item" id="langEng" href="#">English</a>
                            <a class="dropdown-item" id="langRu" href="#" onclick="changeLangToRus()">Русский</a>
                            <a class="dropdown-item" id="langArm" href="#">Հայերեն</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <button type="button" id="sign_in" class="nav-link" data-toggle="modal" data-target="#signInModal">sign in</button>
<!--                        <a class="nav-link" href="sign-in.php">sign in</a>-->
                    </li>
                    <li class="nav-item">
                        <button type="button" id="sign_up" class="nav-link btn-accent" data-toggle="modal" data-target="#signUpModal">sign up</button>
<!--                        <a class="nav-link btn-accent" href="sign-up.php">sign up</a>-->
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<header>
    <div class="container">
        <div class="header-test">
            <h1 class="animated fadeInDown delay-1s">Smart people, clear code</h1>
        </div>
    </div>
</header>
<main>
    <section class="slider-section">
        <div class="heading">
            <h2 class="animated fadeInDown delay-1s">Web development </h2>
        </div>
        <div class="sl_block">
            <div class="slick-carousel animated bounceInLeft delay-2s">
                <div class="sl-slider-1">
                    <a href="#">
                        <img src="img/pic1.png" alt="Web development" class="sl-img-1">
                        <div class="sl_text">
                            <h3 class="sl_heading">Slide No from Gallery</h3>
                            <p class="sl_paragraph">Smart people, clear code</p>
                        </div>
                    </a>
                </div>
                <div class="sl-slider-1">
                    <a href="#">
                        <img src="img/pic2.png" alt="Web development" class="sl-img-1">
                        <div class="sl_text">
                            <h3 class="sl_heading">Slide No from Gallery</h3>
                            <p class="sl_paragraph">Smart people, clear code</p>
                        </div>
                    </a>
                </div>
                <div class="sl-slider-1">
                    <a href="#">
                        <img src="img/pic3.jpg" alt="Web development" class="sl-img-1">
                        <div class="sl_text">
                            <h3 class="sl_heading">Slide No from Gallery</h3>
                            <p class="sl_paragraph">Smart people, clear code</p>
                        </div>
                    </a>
                </div>
                <div class="sl-slider-1">
                    <a href="#">
                        <img src="img/pic4.jpg" alt="Web development" class="sl-img-1">
                        <div class="sl_text">
                            <h3 class="sl_heading">Slide No from Gallery</h3>
                            <p class="sl_paragraph">Smart people, clear code</p>
                        </div>
                    </a>
                </div>
                <div class="sl-slider-1">
                    <a href="#">
                        <img src="img/pic5.png" alt="Web development" class="sl-img-1">
                        <div class="sl_text">
                            <h3 class="sl_heading">Slide No from Gallery</h3>
                            <p class="sl_paragraph">Smart people, clear code</p>
                        </div>
                    </a>
                </div>
                <div class="sl-slider-1">
                    <a href="#">
                        <img src="img/pic6.jpg" alt="Web development" class="sl-img-1">
                        <div class="sl_text">
                            <h3 class="sl_heading">Slide No from Gallery</h3>
                            <p class="sl_paragraph">Smart people, clear code</p>
                        </div>
                    </a>
                </div>
                <div class="sl-slider-1">
                    <a href="#">
                        <img src="img/pic7.jpg" alt="Web development" class="sl-img-1">
                        <div class="sl_text">
                            <h3 class="sl_heading">Slide No from Gallery</h3>
                            <p class="sl_paragraph">Smart people, clear code</p>
                        </div>
                    </a>
                </div>
                <div class="sl-slider-1">
                    <a href="#">
                        <img src="img/pic8.jpg" alt="Web development" class="sl-img-1">
                        <div class="sl_text">
                            <h3 class="sl_heading">Slide No from Gallery</h3>
                            <p class="sl_paragraph">Smart people, clear code</p>
                        </div>
                    </a>
                </div>
                <div class="sl-slider-1">
                    <a href="#">
                        <img src="img/pic10.jpg" alt="Web development" class="sl-img-1">
                        <div class="sl_text">
                            <h3 class="sl_heading">Slide No from Gallery</h3>
                            <p class="sl_paragraph">Smart people, clear code</p>
                        </div>
                    </a>
                </div>
                <div class="sl-slider-1">
                    <a href="#">
                        <img src="img/pic11.jpg" alt="Web development" class="sl-img-1">
                        <div class="sl_text">
                            <h3 class="sl_heading">Slide No from Gallery</h3>
                            <p class="sl_paragraph">Smart people, clear code</p>
                        </div>
                    </a>
                </div>
                <div class="sl-slider-1">
                    <a href="#">
                        <img src="img/pic12.jpg" alt="Web development" class="sl-img-1">
                        <div class="sl_text">
                            <h3 class="sl_heading">Slide No from Gallery</h3>
                            <p class="sl_paragraph">Smart people, clear code</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="slider-nav animated bounceInRight delay-3s">
                <div class="sl-slider-2">
                    <img src="img/min_pic1.jpg" alt="Web development" class="sl-img-2">
                </div>
                <div class="sl-slider-2">
                    <img src="img/min_pic2.jpg" alt="Web development" class="sl-img-2">
                </div>
                <div class="sl-slider-2">
                    <img src="img/min_pic3.jpg" alt="Web development" class="sl-img-2">
                </div>
                <div class="sl-slider-2">
                    <img src="img/min_pic4.jpg" alt="Web development" class="sl-img-2">
                </div>
                <div class="sl-slider-2">
                    <img src="img/min_pic5.jpg" alt="Web development" class="sl-img-2">
                </div>
                <div class="sl-slider-2">
                    <img src="img/min_pic6.jpg" alt="Web development" class="sl-img-2">
                </div>
                <div class="sl-slider-2">
                    <img src="img/min_pic7.jpg" alt="Web development" class="sl-img-2">
                </div>
                <div class="sl-slider-2">
                    <img src="img/min_pic8.jpg" alt="Web development" class="sl-img-2">
                </div>
                <div class="sl-slider-2">
                    <img src="img/min_pic9.jpg" alt="Web development" class="sl-img-2">
                </div>
                <div class="sl-slider-2">
                    <img src="img/min_pic10.jpg" alt="Web development" class="sl-img-2">
                </div>
                <div class="sl-slider-2">
                    <img src="img/min_pic11.jpg" alt="Web development" class="sl-img-2">
                </div>
                <div class="sl-slider-2">
                    <img src="img/min_pic12.jpg" alt="Web development" class="sl-img-2">
                </div>
            </div>
        </div>
    </section>
    <section class="web-tech" ">
        <div class="container">
            <div class="heading">
                <h2 class="animated bounceInLeft delay-3s">Web development technologies</h2>
            </div>
            <div class="tech-block animated bounceInRight delay-4s">
                <div class="row">
                    <div class="col-md-6 animated bounceInRight delay-4s">
                        <div class="card" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <a href="https://developer.mozilla.org/en-US/docs/Web/HTML" target="_blank">
                                        <img src="img/html5.svg" class="card-img" alt="HTML">
                                    </a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <a href="https://developer.mozilla.org/en-US/docs/Web/HTML" target="_blank"><h5 class="card-title">HTML</h5></a>
                                        <p class="card-text"><strong>HyperText Markup Language (HTML)</strong> is the most basic building block of the Web. It defines the meaning and structure of web content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animated bounceInRight delay-4s">
                        <div class="card" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <a href="https://developer.mozilla.org/en-US/docs/Web/CSS" target="_blank">
                                        <img src="img/css3.svg" class="card-img" alt="CSS">
                                    </a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <a href="https://developer.mozilla.org/en-US/docs/Web/CSS" target="_blank"><h5 class="card-title">CSS</h5></a>
                                        <p class="card-text"><strong>Cascading Style Sheets (CSS)</strong> is a stylesheet language used to describe the presentation of a document written in HTML or XML. CSS describes how elements should be rendered on screen.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animated bounceInLeft delay-5s">
                        <div class="card" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank">
                                        <img src="img/js.svg" class="card-img" alt="JavaScript">
                                    </a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank"><h5 class="card-title">JavaScript</h5></a>
                                        <p class="card-text"><strong>JavaScript (JS)</strong> is a lightweight, interpreted, object-oriented language and is best known as the scripting language for Web pages.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animated bounceInLeft delay-5s">
                        <div class="card" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <a href="https://api.jquery.com/" target="_blank">
                                        <img src="img/jquery.svg" class="card-img" alt="jQuery">
                                    </a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <a href="https://api.jquery.com/" target="_blank"><h5 class="card-title">jQuery</h5></a>
                                        <p class="card-text"><strong>jQuery</strong> is a fast, small, and feature-rich JavaScript library. It makes things like HTML document traversal and manipulation.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animated bounceInRight delay-5s">
                        <div class="card" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <a href="https://www.php.net/docs.php" target="_blank">
                                        <img src="img/php.svg" class="card-img" alt="PHP">
                                    </a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <a href="https://www.php.net/docs.php" target="_blank"><h5 class="card-title">PHP</h5></a>
                                        <p class="card-text"><strong>PHP (PHP: Hypertext Preprocessor)</strong> is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animated bounceInRight delay-5s">
                        <div class="card" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <a href="https://dev.mysql.com/doc/" target="_blank">
                                        <img src="img/mysql.svg" class="card-img" alt="MySQL">
                                    </a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <a href="https://dev.mysql.com/doc/" target="_blank"><h5 class="card-title">MySQL</h5></a>
                                        <p class="card-text">The <strong>MySQL (Structured Query Language)</strong> software delivers a very fast, multi threaded, multi-user, and robust SQL database server. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section></section>
</main>
<footer>
    <div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sign up</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="action.php" method="post" id="account-sign-up">
                        <div class="form-group">
                            <label for="input-name" class="col-form-label">Full name <i class="fas fa-user"></i></label>
                            <input type="text" name="name" placeholder="Enter full name" class="form-control" id="input-name" required onblur="validateInputField(this, document.getElementById('help_name'))">
                            <span id="help_name" class="help-text"></span>
                        </div>
                        <div class="form-group">
                            <label for="input-email" class="col-form-label">Email <i class="fas fa-envelope"></i></label>
                            <input type="email" name="email" placeholder="Enter E-mail" class="form-control" id="input-email" required onblur="validateEmail(this, document.getElementById('help_email'))">
                            <span id="help_email" class="help-text"></span>
                        </div>
                        <div class="form-group">
                            <label for="input-password" class="col-form-label">Password <i class="fas fa-lock"></i></label>
                            <input type="password" name="pass" placeholder="Enter password" class="form-control" id="input-password" required onblur="validateInputField(this, document.getElementById('help_pass'))">
                            <span id="help_pass" class="help-text"></span>
                        </div>
                        <div class="form-group">
                            <label for="repeat-password" class="col-form-label">Repeat password <i class="fas fa-lock"></i></label>
                            <input type="password" name="repeat_pass" placeholder="Repeat password" class="form-control" id="repeat-password" required onblur="validateInputField(this, document.getElementById('help_re_pass'))">
                            <span id="help_re_pass" class="help-text"></span>
                        </div>
                        <div class="form-group">
                            <button name="submit" class="btn btn-accent">Register</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="mod-f-text">
                        <span class="f-text">
                            By creating an account, I agree to shav.blog.am’s Terms of Use and Privacy Policy.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sign in</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="action.php" method="post" id="account-sign-in">
                        <div class="form-group">
                            <label for="si-input-email" class="col-form-label">Email <i class="fas fa-envelope"></i></label>
                            <input type="email" name="email" placeholder="Enter E-mail" class="form-control" id="si-input-email" required onblur="validateEmail(this, document.getElementById('help_email'))">
                            <span id="si-help_email" class="help-text"></span>
                        </div>
                        <div class="form-group">
                            <label for="si-input-password" class="col-form-label">Password <i class="fas fa-lock"></i></label>
                            <input type="password" name="pass" placeholder="Enter password" class="form-control" id="si-input-password" required onblur="validateInputField(this, document.getElementById('si-help_pass'))">
                            <span id="si-help_pass" class="help-text"></span>
                        </div>
                        <div class="form-group">
                            <button name="submit" class="btn btn-accent">Sign up</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="mod-f-text">
                        <span class="f-text">
                           Don't have an account yet? Register your account now.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/js/fontawesome.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="script.js"></script>
</body>
</html>