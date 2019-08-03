<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Skills</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css">

</head>
<body class="skills">
<div class="heading-nav">
    <div class="container">
        <nav class="navbar navbar-expand-lg fixed-top  wow fadeInDown" data-wow-duration="1s">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fas fa-bars"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav" id="menu_nav">
                    <li class="nav-item">
                        <a class="nav-link home-tr" href="index.php"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link gallery-tr" href="gallery.php"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link my_skills-tr" href="my_skills.php"> </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle contacts-tr" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        <div class="dropdown-menu lang" aria-labelledby="navbarDropdownLanguage">
                            <a class="dropdown-item" data-lang="en" id="langEng" href="#">English</a>
                            <a class="dropdown-item" data-lang="ru" id="langRu" href="#">Русский</a>
                            <a class="dropdown-item" data-lang="hy" id="langArm" href="#">Հայերեն</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <button type="button" id="sign_in" class="nav-link sign_in-tr" data-toggle="modal" data-target="#signInModal"></button>
                    </li>
                    <li class="nav-item">
                        <button type="button" id="sign_up" class="nav-link btn-accent sign_up-tr" data-toggle="modal" data-target="#signUpModal"></button>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<header>
    <div class="container">
        <div class="header-test">
            <h1 class=" wow fadeInDown header-smart-tr" data-wow-duration="3s" data-delay="1s">Smart person, clear code</h1>
        </div>
    </div>
</header>
<main>
    <section class="cards_section">
        <div class="container">
            <div class="heading">
                <h1>Levels of  Language Proficiency</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3" id="first-card">
                    <div class="card">
                        <div class="card-header">
                            <h2>English</h2>
                        </div>
                        <div class="card-body">
                            <h2>Intermediate</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" id="second-card">
                    <div class="card" >
                        <div class="card-header">
                            <h2>Russian</h2>
                        </div>
                        <div class="card-body">
                            <h2>Intermediate</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" id="third-card">
                    <div class="card" >
                        <div class="card-header">
                            <h2>Armenian</h2>
                        </div>
                        <div class="card-body">
                            <h2>Native</h2>
                        </div>
                    </div>
                </div>
                <div class="col-12" id="first-progress">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">Write</div>
                    </div>
                </div>
                <div class="col-12" id="second-progress">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">Read</div>
                    </div>
                </div>
                <div class="col-12" id="third-progress">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">Speak</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cards_section">
        <div class="container">
            <div class="heading">
                <h1>Levels of Web Programming Technologies Proficiency</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3" id="html-card">
                    <div class="card">
                        <div class="card-header">
                            <h2>Html</h2>
                        </div>
                        <div class="card-body">
                            <h2>Good</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" id="css-card">
                    <div class="card" >
                        <div class="card-header">
                            <h2>Css/Sass</h2>
                        </div>
                        <div class="card-body">
                            <h2>Good</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" id="js-card">
                    <div class="card" >
                        <div class="card-header">
                            <h2>Java Script</h2>
                        </div>
                        <div class="card-body">
                            <h2>Junior level</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" id="php-card">
                    <div class="card">
                        <div class="card-header">
                            <h2>PHP</h2>
                        </div>
                        <div class="card-body">
                            <h2>Junior level</h2>
                        </div>
                    </div>
                </div>
                <div class="col-12" id="program-progress">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">Write</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mod-sign_up-tr" id="exampleModalLabel">Sign up</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="action.php" method="post" id="account-sign-up">
                    <div class="form-group">
                        <label for="input-name" class="col-form-label modal_form_name-tr">Full name <i class="fas fa-user"></i></label>
                        <input type="text" name="name" placeholder="Enter full name" class="form-control" id="input-name" required onblur="validateInputField(this, document.getElementById('help_name'))">
                        <span id="help_name" class="help-text"></span>
                    </div>
                    <div class="form-group">
                        <label for="input-email" class="col-form-label modal_form_email-tr">Email <i class="fas fa-envelope"></i></label>
                        <input type="email" name="email" placeholder="Enter E-mail" class="form-control" id="input-email" required onblur="validateEmail(this, document.getElementById('help_email'))">
                        <span id="help_email" class="help-text"></span>
                    </div>
                    <div class="form-group">
                        <label for="input-password" class="col-form-label modal_form_pass-tr">Password <i class="fas fa-lock"></i></label>
                        <input type="password" name="pass" placeholder="Enter password" class="form-control" id="input-password" required onblur="validateInputField(this, document.getElementById('help_pass'))">
                        <span id="help_pass" class="help-text"></span>
                    </div>
                    <div class="form-group">
                        <label for="repeat-password" class="col-form-label modal_form_repeat-pass-tr">Repeat password <i class="fas fa-lock"></i></label>
                        <input type="password" name="repeat_pass" placeholder="Repeat password" class="form-control" id="repeat-password" required onblur="validateInputField(this, document.getElementById('help_re_pass'))">
                        <span id="help_re_pass" class="help-text"></span>
                    </div>
                    <div class="form-group">
                        <button name="submit" class="btn btn-accent mod-btn-reg-tr">Register</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="mod-f-text">
                    <span class="f-text f-text-tr">
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
                <h5 class="modal-title mod-sign-in-tr" id="exampleModalLabel">Sign in</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="action.php" method="post" id="account-sign-in">
                    <div class="form-group">
                        <label for="si-input-email" class="col-form-label modal_signIn_email-tr">Email <i class="fas fa-envelope"></i></label>
                        <input type="email" name="email" placeholder="Enter E-mail" class="form-control" id="si-input-email" required onblur="validateEmail(this, document.getElementById('help_email'))">
                        <span id="si-help_email" class="help-text"></span>
                    </div>
                    <div class="form-group">
                        <label for="si-input-password" class="col-form-label modal_signIn_pass-tr">Password <i class="fas fa-lock"></i></label>
                        <input type="password" name="pass" placeholder="Enter password" class="form-control" id="si-input-password" required onblur="validateInputField(this, document.getElementById('si-help_pass'))">
                        <span id="si-help_pass" class="help-text"></span>
                    </div>
                    <div class="form-group">
                        <button name="submit" class="btn btn-accent mod-btn-sign-in-tr">Sign in</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="mod-f-text">
                    <span class="f-text mod-signIn-txt-tr">
                       Don't have an account yet? Register your account now.
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="footer-content">
            <div class="ft-nav-menu">
                <ul class="navbar-nav" id="ft-menu_nav">
                    <li class="nav-item">
                        <a class="nav-link ft-home-tr" href="index.php"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ft-gallery-tr" href="gallery.php" target="_blank"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ft-my_skills-tr" href="my_skills.php" target="_blank"> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ft-contacts-tr" href="contacts.php"></a>
                    </li>
                </ul>
            </div>
            <div class="social-sites">
                <a class="social-item" href="https://web.facebook.com/shavarsh7777" target="_blank"><i class="fab fa-facebook-square"></i></a>
                <a class="social-item" href="https://www.linkedin.com/in/shavarsh-abrahamyan-42065816a/" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a class="social-item" href="https://github.com/Shav-webdev" target="_blank"><i class="fab fa-github"></i></a>
            </div>
            <div class="copyright">
                <span class="copyright-txt">
                    Copyright &copy; 2019 by Shavarsh Abrahamyan
                </span>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/js/fontawesome.min.js"></script>
<script src="script.js"></script>

</body>
</html>

